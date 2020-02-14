<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\ProfileHotel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Str;
use Intervention\Image\Facades\Image;

class ProfileHotelController extends Controller
{
    public function indexHotel($url_slug)
    {
        $profil = ProfileHotel::where('url_slug', '=', $url_slug)->first();
        if ($profil != null) {
            $hotel = Hotel::findOrFail($profil->hotel_id);
            return view('profile.hotel', compact('hotel'));
        } else {
            abort(404);
        }
    }

    public function edit($url_slug)
    {
        $profil = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $hotel = Hotel::find($profil->hotel_id);
        return view('profile.editHotel', compact('hotel'));
    }


    public function update($url_slug)
    {
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $hotel = Hotel::find($profile->hotel_id);

        $data = request()->validate([
            'nama' => 'required',
            'nomor_telepon' => '',
            'alamat' => '',
            'social_media' => '',
            'website' => '',
            'foto' => ''
        ]);

        $profile->update($data);

        if (request('foto')) {
            $fotoPath = request('foto')->store('hotel/photo', 'public');

            $foto = Image::make(public_path("image/{$fotoPath}"))->fit(1000, 1000);
            $foto->save();
            $path = "/image/{$fotoPath}";
            $fotoArray = ['foto' => $path];
            if ($hotel->profile->foto != null) {
                $oldPath = public_path($hotel->profile->foto);
                if (file_exists($oldPath)) { //If it exits, delete it from folder
                    unlink($oldPath);
                }
            }


            auth()->user()->profile->update(array_merge(
                $data,
                $fotoArray ?? []
            ));


            return redirect("/hotel/{$profile->url_slug}")->with("success", "Data Has Been Updated Successfully");
        }
    }
}
