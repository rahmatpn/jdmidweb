<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
        public function indexUser($user){
            $user = User::find($user);
            return view('user',[
                'user' => $user,
            ]);
}
}
