<?php

namespace App\Http\Controllers;

use App\PosisiUser;
use App\Posisi;
use App\ProfileUser;
use App\User;
use App\Http\Controllers\PosisiController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileUserController extends Controller {

    public function indexUser($url_slug) {
        $profil = ProfileUser::where('url_slug', '=', $url_slug)->first();
        if ($profil != null) {
            $user = User::findOrFail($profil->user_id);
            return view('profile.user', compact('user'));
        } else {
            abort(404);
        }
        //            return view('profile.user', compact('user'));
    }

    public function edit($url_slug) {
        $profil = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $user = User::find($profil->user_id);
        if (\auth()->guard('user')->user()) {
            $this->authorize('update', $user->profile);
        }

        $posisi = Posisi::all();

        $posisiUser = PosisiUser::where('user_id', '=', $user->id)->get();

        foreach ($posisi as $pos) {
            foreach ($posisiUser as $posU) {
                //dd($posU->posisi_id);
                if ($pos->id == $posU->posisi_id) {
                    $pos->posisi = 1;
                }
            }
        }

        return view('profile.editUser', compact('user', 'posisi'));
    }
    public function editBerkas($url_slug) {
        $profil = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $user = User::find($profil->user_id);
        if (\auth()->guard('user')->user()) {
            $this->authorize('update', $user->profile);
        }
        return view('profile.editUser', compact('user'));
    }
    public function update($url_slug, Request $req) {
        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $user = User::find($profile->user_id);

        if (\auth()->guard('user')->user()) {
            $this->authorize('update', $user->profile);
        }

        $data = request()->validate([
            'nama' => 'required',
            'nama_lengkap' => 'required',
            'jenis_kelamin' => '',
            'pendidikan_terakhir' => '',
            'nomor_telepon' => '',
            'tanggal_lahir' => '',
            'tinggi_badan' => '',
            'berat_badan' => '',
            'alamat' => '',
            'social_media' => ''
        ]);

        $profile->update($data);
        if ($req->posisi_user) {
            $posisi = $req->posisi_user;
            $posisiUser = PosisiUser::where('user_id', '=', $user->id)->delete();
            if ($posisi != null) {
                foreach ($posisi as $pos) {
                    $posisiUser = new PosisiUser;
                    $posisiUser->user_id = $user->id;
                    $posisiUser->posisi_id = $pos;
                    $posisiUser->save();
                }
            }
        }

        if (request('foto')) {
            if (file_exists($profile->foto)) {
                unlink($profile->foto);
            }
            $fileFoto = request('foto');
            $foto = $fileFoto->move('image/user/profile/', time(). '.' . $fileFoto->getClientOriginalExtension());
            $imageSize = getimagesize($foto);
            if ($imageSize[0] < $imageSize[1])
                $size = $imageSize[0];
            else
                $size = $imageSize[1];
            Image::make($foto)->fit($size)->save($foto);
        }

        if (request('cover')) {
            if (file_exists($profile->cover)) {
                unlink($profile->cover);
            }
            $fileCover = request('cover');
            $cover = $fileCover->move('image/user/cover/', time(). '.' . $fileCover->getClientOriginalExtension());
        }

        $profile->update([
            'foto' => !empty($foto) ? $foto : $profile->foto,
            'cover' => !empty($cover) ? $cover : $profile->cover,
        ]);

        if (auth()->guard('user')->user() !=null){
            return redirect("/user/{$profile->url_slug}");
        } else
            return redirect('/admin/user/manage');
    }

    public function updateBerkas($url_slug){
        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $user = User::find($profile->user_id);

        if (\auth()->guard('user')->user()) {
            $this->authorize('update', $user->profile);
        }

        if (request('ktp')) {
            if (file_exists($profile->ktp)) {
                unlink($profile->ktp);
            }
            $fileKtp = request('ktp');
            $ktp = $fileKtp->move('image/user/ktp/', time(). '.' . $fileKtp->getClientOriginalExtension());
        }

        if (request('skck')) {
            if (file_exists($profile->skck)) {
                unlink($profile->skck);
            }
            $fileSkck = request('skck');
            $skck = $fileSkck->move('image/user/skck/', time(). '.' . $fileSkck->getClientOriginalExtension());
        }

        if (request('sertifikat')) {
            if (file_exists($profile->sertifikat)) {
                unlink($profile->sertifikat);
            }
            $fileSertifikat = request('sertifikat');
            $sertifikat = $fileSertifikat->move('image/user/sertifikat/', time(). '.' . $fileSertifikat->getClientOriginalExtension());
        }

        if (request('kartu_satpam')) {
            if (file_exists($profile->kartu_satpam)) {
                unlink($profile->kartu_satpam);
            }
            $fileKartu = request('kartu_satpam');
            $kartu_satpam = $fileKartu->move('image/user/satpam/', time(). '.' . $fileKartu->getClientOriginalExtension());
        }

        $profile->update([
            'ktp' => !empty($ktp) ? $ktp : $profile->ktp,
            'skck' => !empty($skck) ? $skck : $profile->skck,
            'sertifikat' => !empty($sertifikat) ? $sertifikat : $profile->sertifikat,
            'kartu_satpam' => !empty($kartu_satpam) ? $kartu_satpam : $profile->kartu_satpam,
        ]);

        if (auth()->guard('user')->user() !=null){
            return redirect("/user/{$profile->url_slug}");
        } else
            return redirect('/admin/user/manage');
    }

    public function destroy($url_slug){
        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $user = User::find($profile->user_id);
        $user->delete();
        return redirect('/admin/user/manage');
    }
}
