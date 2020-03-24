<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Http\Response;

class AuthController extends Controller
{
    public function register(Request $request){
        $data = $request->validate([
           'name'=>'required|min:4|max:55|unique:users',
            'email'=>'email|required|unique:users',
            'password'=>'required|confirmed|min:8',
        ]);

        $data['password'] = bcrypt($request->password);
        $user = User::create($data);

        $accessToken = $user->createToken('authToken')->accessToken;
        return response(['login'=>['user' => $user, 'access_token' => $accessToken]]);
    }

    public function login(Request $request)
    {
        $loginData = $request->validate([
            'email' => 'email|required',
            'password' => 'required'
        ]);

        if(!auth()->attempt($loginData)) {
            return response(['message'=>'Invalid credentials']);
        }
        $accessToken = auth()->user()->createToken('authToken')->accessToken;
        return response(['login'=>['user' => auth()->user(), 'access_token' => $accessToken]]);
    }

    public function logout()
    {
        if (auth()->check()) {
            auth()->user()->token()->revoke();
            return response(Response::HTTP_OK);
        }
    }
}
