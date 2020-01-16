<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ProfileHotelController extends Controller
{
    public function indexHotel(){
        return view('hotel');
    }
}
