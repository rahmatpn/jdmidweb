<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ProfileUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use function auth;

class ProfileController extends Controller
{
    function getUserProfile($id)
    {
        return response(["profile"=>\App\ProfileUser::firstOrFail()->where('user_id', $id)->get()]);
    }

    function updateProfile(Request $request)
    {
        $id = auth()->id();
        $profile = ProfileUser::findOrFail($id);
        $newProfile = Validator::make($request->all(),[
            'id' => 'required',
            'user_id' => 'required',
            'email' => 'required'
        ]);
        if ($newProfile->fails()) {
            return response()->json(['errors'=>$newProfile->messages()],Response::HTTP_UNPROCESSABLE_ENTITY);
        }else {
            $profile->update($request->all());
            return response()->json(['profile' => $profile], Response::HTTP_OK);
        }
    }

    public function uploadImage(Request $request) {
        $id = auth()->id();
        $profile = ProfileUser::findOrFail($id);

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $name = time().'.'.$file->getClientOriginalExtension();
        $path = "profile/";
        $destinationPath = public_path($path);
        $file->move($destinationPath, $name);
        $realPath = $path.$name;
        $oldPath = public_path($profile['foto']);
        if(file_exists($oldPath)){ //If it exits, delete it from folder
            unlink($oldPath);
        }
        $profile->update(['foto'=>$realPath]);

        return response()->json($profile, Response::HTTP_OK);
    }

    public function uploadCover(Request $request) {
        $id = auth()->id();
        $profile = ProfileUser::findOrFail($id);

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $name = time().'.'.$file->getClientOriginalExtension();
        $path = "cover/";
        $destinationPath = public_path($path);
        $file->move($destinationPath, $name);
        $realPath = $path.$name;
        $oldPath = public_path($profile['cover']);
        if(file_exists($oldPath)){ //If it exits, delete it from folder
            unlink($oldPath);
        }
        $profile->update(['cover'=>$realPath]);

        return response()->json($profile, Response::HTTP_OK);
    }
}
