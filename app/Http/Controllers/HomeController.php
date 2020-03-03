<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\ProfileHotel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
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
//        if (\auth()->guard('hotel')->user() != null){
//            $myhotel = Pekerjaan::where('hotel_id',\auth()->guard('hotel')->user()->profile->id);
//        }
        return view('home', compact('pekerjaan', 'user','hotel','myhotel'));
    }
    public function indexHotel(){
        $hotel = \auth()->guard('hotel')->user();
        $pekerjaan = Pekerjaan::where('hotel_id','=', $hotel->profile->hotel_id)->paginate(5);
        return view('homeHotel', array('pekerjaan' => $pekerjaan), compact('hotel'));

    }

}
