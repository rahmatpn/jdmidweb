<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use App\Posisi;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use mysql_xdevapi\Table;
use Illuminate\Support\Facades\DB;

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
//        $pekerjaan = DB::table('pekerjaan')->paginate(20);
        $user = \auth()->guard('user')->user();
        $hotel = \auth()->guard('hotel')->user();
        return view('home', compact('pekerjaan', 'user','hotel'));
    }
}
