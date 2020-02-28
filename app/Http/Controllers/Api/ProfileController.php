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

    function updateProfile(Request $request, $id)
    {
        if ($id != auth()->id())
            return response(Response::HTTP_UNAUTHORIZED);

        $profile = ProfileUser::findOrFail(auth()->id());
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

    public function uploadImage(Request $request, $id) {
        if ($id != auth()->id())
            return response(Response::HTTP_UNAUTHORIZED);

        $profile = ProfileUser::findOrFail(auth()->id());

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $oldImage = $profile->foto;

        $photo = $file->move('image/user/profile/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['foto'=>$photo]);

        if (file_exists($oldImage))
            unlink($oldImage);

        return response()->json(ProfileUser::findOrFail($id), Response::HTTP_OK);
    }

    public function uploadCover(Request $request, $id) {
        if ($id != auth()->id())
            return response(Response::HTTP_UNAUTHORIZED);

        $profile = ProfileUser::findOrFail(auth()->id());

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $oldImage = $profile->cover;

        $cover = $file->move('image/user/cover/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['cover'=>$cover]);

        if (file_exists($oldImage))
            unlink($oldImage);

        return response()->json(ProfileUser::findOrFail($id), Response::HTTP_OK);
    }

    public function uploadKtp(Request $request, $id){
        if ($id != auth()->id())
            return response(Response::HTTP_UNAUTHORIZED);

        $profile = ProfileUser::findOrFail(auth()->id());

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $ktp = $file->move('image/user/ktp/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['ktp'=>$ktp, 'status_ktp'=>null]);

        return response()->json(ProfileUser::findOrFail($id), Response::HTTP_OK);
    }

    public function uploadSkck(Request $request, $id){
        if ($id != auth()->id())
            return response(Response::HTTP_UNAUTHORIZED);

        $profile = ProfileUser::findOrFail(auth()->id());

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $skck = $file->move('image/user/ktp/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['skck'=>$skck, 'status_skck'=>null]);

        return response()->json(ProfileUser::findOrFail($id), Response::HTTP_OK);
    }

    public function uploadSertifikat(Request $request, $id){
        if ($id != auth()->id())
            return response(Response::HTTP_UNAUTHORIZED);

        $profile = ProfileUser::findOrFail(auth()->id());

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $sertif = $file->move('image/user/ktp/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['sertifikat'=>$sertif, 'status_sertifikat'=>null]);

        return response()->json(ProfileUser::findOrFail($id), Response::HTTP_OK);
    }

    public function uploadKartuSatpam(Request $request, $id){
        if ($id != auth()->id())
            return response(Response::HTTP_UNAUTHORIZED);

        $profile = ProfileUser::findOrFail(auth()->id());

        if(!$request->hasFile('image')) {
            return response()->json(['upload_file_not_found'], 400);
        }
        $file = $request->file('image');
        if(!$file->isValid()) {
            return response()->json(['invalid_file_upload'], 400);
        }

        $kartu_satpam = $file->move('image/user/ktp/', time(). '.' . $file->getClientOriginalExtension());

        $profile->update(['kartu_satpam'=>$kartu_satpam, 'status_kartu_satpam'=>null]);

        return response()->json(ProfileUser::findOrFail($id), Response::HTTP_OK);
    }
}
