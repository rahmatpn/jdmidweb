<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

class KerjakanController extends Controller
{

    public function index(){
//        $pekerjaan = Pekerjaan::orderBy('tanggal_mulai')->get();
        return view('jobs.joblist', compact('pekerjaan'));
    }

    public function store(){


    }
}
