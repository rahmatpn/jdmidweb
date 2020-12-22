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

    public function index(Request $request)
    {
        $date = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString();
        $time = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toTimeString();

        $pekerjaan = null;
        if ($request->input('filter_category')) {
            $pekerjaan = Pekerjaan::where('posisi_id', $request->input('filter_category'))->paginate(12);
        } else {
            $pekerjaan = Pekerjaan::paginate(12);
        }

        $array_with_value = [1, 2, 3, 4, 5, 6, 7, 8];
        $array_values = [0, 0, 0, 0, 0, 0, 0, 0];

        for ($i = 0; $i < 8; $i++) {
            $array_values[$i] = Pekerjaan::where('posisi_id', $array_with_value[$i])->count();
        }

        $user = \auth()->guard('user')->user();
        return view('home', array('kerja' => $pekerjaan), compact( 'user','time','date', 'array_values'));

    }

    public function indexHotel(){
        $hotel = \auth()->guard('hotel')->user();
        $pekerjaan = Pekerjaan::where('hotel_id','=', $hotel->profile->hotel_id)->paginate(5);
        return view('homeHotel', array('pekerjaan' => $pekerjaan), compact('hotel'));

    }

}
