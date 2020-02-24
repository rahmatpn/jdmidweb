<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use App\Posisi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */

    public function index()
    {
        $pekerjaan = Pekerjaan::orderBy('tanggal_mulai')->get();
        $user = \auth()->guard('user')->user();
        $hotel = \auth()->guard('hotel')->user();
        return view('home', compact('pekerjaan', 'user'));
    }
}
