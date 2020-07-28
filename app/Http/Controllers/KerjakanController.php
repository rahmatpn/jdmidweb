<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use App\Posisi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KerjakanController extends Controller
{


    public function index(){
        $user = Auth::guard('user')->user();
        $kerjakan = $user->mengerjakan()->where('pekerjaan_user.status', '>=', '1')->get();
        return view('jobs.joblist', compact('kerjakan','user'));
    }

    public function store(){


    }
}
