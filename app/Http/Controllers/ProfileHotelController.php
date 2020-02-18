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

class ProfileHotelController extends Controller {

    public function indexHotel($url_slug) {
        $profil = ProfileHotel::where('url_slug', '=', $url_slug)->first();
        if ($profil != null) {
            $hotel = Hotel::findOrFail($profil->hotel_id);
            return view('profile.hotel', compact('hotel'));
        } else {
            abort(404);
        }
    }

    public function edit($url_slug) {
        $profil = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $hotel = Hotel::find($profil->hotel_id);
        return view('profile.editHotel', compact('hotel'));
    }

    public function update($url_slug) {
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();

        $data = request()->validate([
            'nama' => 'required',
            'nomor_telepon' => '',
            'alamat' => '',
            'social_media' => '',
            'website' => '',
            'deskripsi' => '',
            'foto' => ''
        ]);

        $profile->update($data);

        if (request('foto')) {
            $file = request('foto');
            $foto = $file->move('image/hotel/photo/', $profile->nama . '.' . $file->getClientOriginalExtension());

        }


        $profile->update([
            'foto' => !empty($foto) ? $foto : $profile->foto,
        ]);

        return redirect("/hotel/{$profile->url_slug}")->with("success", "Data Has Been Updated Successfully");
    }

}
