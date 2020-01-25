<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\ProfileHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

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

        if(request('foto')){
            $fotoPath = request('foto')->store('hotel/photo','public');

            $foto = Image::make(public_path("image/{$fotoPath}"))->fit(1000,1000);
            $foto->save();
        }


        auth()->user()->profile->update(array_merge(
            $data,
            ['foto'=> $fotoPath]
        ));

        return redirect("/hotel/{$hotel->id}")->with("Data Has Been Updated Successfully");
    }
}
