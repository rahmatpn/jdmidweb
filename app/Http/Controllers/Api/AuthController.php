<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AuthController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
           'name'=>'required|max:55',
            'email'=>'email|required|unique:users',
            'password'=>'required|confirmed'
        ]);

        $data['password'] = bcrypt($request->password);

        $user = User::create($data);

        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['user'=> $user, 'access_token'=> $accessToken]);
    }
}
