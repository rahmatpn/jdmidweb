<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Posisi;
use App\ProfileUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;
use Intervention\Image\Facades\Image;
use function auth;

class ProfileController extends Controller
{
    function getUserProfile($id)
    {
        return response(["profile"=> ProfileUser::firstOrFail()->where('user_id', $id)->get()]);
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
            $profile->update($request->except('isCompleted'));
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

        if (file_exists($profile->foto)) {
            unlink($profile->foto);
        }

        $photo = $file->move('image/user/profile/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['foto'=>$photo]);

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

        if (file_exists($profile->cover)) {
            unlink($profile->cover);
        }

        $cover = $file->move('image/user/cover/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['cover'=>$cover]);

        return response()->json($profile, Response::HTTP_OK);
    }
}
