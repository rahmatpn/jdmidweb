<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\ProfileHotel;
use App\User;
use Carbon\Carbon;
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
        $date = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString();
        $time = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toTimeString();



        $pekerjaan = Pekerjaan::where('status', '1')
            ->where(function ($q) use($date, $time){
                $q->where('tanggal_mulai','>',$date)
                    ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time);
            })
            ->orderBy('tanggal_mulai')
            ->paginate(10);

        $user = \auth()->guard('user')->user();
        return view('home', array('kerja' => $pekerjaan), compact( 'user','time','date'));

    }

    public function indexHotel(){
        $hotel = \auth()->guard('hotel')->user();
        $pekerjaan = Pekerjaan::where('hotel_id','=', $hotel->profile->hotel_id)->paginate(5);
        return view('homeHotel', array('pekerjaan' => $pekerjaan), compact('hotel'));

    }

}
