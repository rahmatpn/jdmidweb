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

    public function edit (Hotel $hotel){
        return view('profile.editHotel', compact('hotel'));
    }


    public function update(Hotel $hotel){

        $profile= ProfileHotel::findOrFail($hotel->id);
        $data = request()->validate([
            'nama' => 'required',
            'nomor_telepon' => '',
            'alamat' => '',
            'social_media'=> '',
            'website' => '',
            'foto'=>''
        ]);
        $profile->update($data);

        return redirect("/hotel/{$hotel->id}");
    }
}
