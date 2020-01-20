<?php

namespace App\Http\Controllers;

use App\Hotel;
use Illuminate\Http\Request;

class ProfileHotelController extends Controller
{
    public function indexHotel($hotel){
        $hotel = Hotel::findOrFail($hotel);
        return view('profile.hotel',[
            'hotel' => $hotel,
        ]);
    }
}
