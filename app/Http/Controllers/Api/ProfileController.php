<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ProfileController extends Controller
{
    function getUserProfile(Request $request, $id)
    {
        return response(["profile"=>\App\ProfileUser::firstOrFail()->where('id_user', $id)->get()]);
    }

    function updateProfile(Request $request, $id)
    {
        $profile = $this->getUserProfile($request, $id);

    }
}
