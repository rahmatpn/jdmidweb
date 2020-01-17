<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ProfileUser;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Validator;

class ProfileController extends Controller
{
    function getUserProfile($id)
    {
        return response(["profile"=>\App\ProfileUser::firstOrFail()->where('id_user', $id)->get()]);
    }

    function updateProfile(Request $request, $id)
    {
        $profile = ProfileUser::findOrFail($id);
        $newProfile = Validator::make($request->all(),[
            'id' => 'required',
            'id_user' => 'required',
            'email' => 'required'
        ]);
        if ($newProfile->fails()) {
            return response()->json(['errors'=>$newProfile->messages()],Response::HTTP_UNPROCESSABLE_ENTITY);
        }else {
            $profile->update($request->all());
            return response()->json(['profile' => $profile], Response::HTTP_OK);
        }
    }
}
