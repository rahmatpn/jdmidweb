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
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $hotel = Hotel::find($profile->hotel_id);

        if (\auth()->guard('hotel')->user()) {
            $this->authorize('update', $hotel->profile);
        }

        return view('profile.editHotel', compact('hotel'));
    }

    public function update($url_slug) {
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $hotel = Hotel::find($profile->hotel_id);
        if (\auth()->guard('hotel')->user()) {
            $this->authorize('update', $hotel->profile);
        }

        $data = request()->validate([
            'nama' => 'required',
            'nomor_telepon' => '',
            'alamat' => '',
            'social_media' => '',
            'website' => '',
            'deskripsi' => '',
        ]);

        $profile->update($data);

        if (request('foto')) {
            if (file_exists($profile->foto)) {
                unlink($profile->foto);
            }
            $fileFoto = request('foto');
            $foto = $fileFoto->move('image/hotel/photo/', time(). '.' . $fileFoto->getClientOriginalExtension());
            Image::make($foto)->fit(1000)->save($foto);
        }

        $profile->update([
            'foto' => !empty($foto) ? $foto : $profile->foto,
        ]);

        if(auth()->guard('hotel')->user() != null) {
            return redirect("/seller/{$profile->url_slug}")->with("success", "Data Has Been Updated Successfully");
        }else
            return redirect('/admin/seller/manage');
    }

    public function destroy($url_slug){
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $hotel = Hotel::find($profile->hotel_id);
        $hotel->delete();
        return redirect('/admin/seller/manage');
    }
}
