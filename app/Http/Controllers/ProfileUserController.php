<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
        public function indexUser(User $user){
            return view('profile.user', compact('user'));
        }

        public function edit (User $user){
            return view('profile.editUser', compact('user'));
        }
}
