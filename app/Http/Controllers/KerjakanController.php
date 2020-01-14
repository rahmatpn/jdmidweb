<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class KerjakanController extends Controller
{
    public function store(User $user){
        return auth()->user()->mengerjakan()->toggle($user->pekerjaan);
    }
}
