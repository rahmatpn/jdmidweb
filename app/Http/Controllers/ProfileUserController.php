<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
        public function indexUser(){
            return view('user');
}
}
