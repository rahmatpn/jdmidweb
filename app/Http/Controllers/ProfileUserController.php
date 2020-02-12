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

class ProfileUserController extends Controller
{
        public function indexUser($url_slug){
            $profil = ProfileUser::where('url_slug', '=', $url_slug)->first();
            if ($profil != null) {
                $user = User::findOrFail($profil->user_id);
                return view('profile.user', compact('user'));
            } else {
                abort(404);
            }
            //            return view('profile.user', compact('user'));
        }

        public function edit ($url_slug){
            $profil = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
            $user = User::find($profil->user_id);

            $this->authorize('update', $user->profile);
            $posisi = Posisi::all();

            $posisiUser = PosisiUser::where('user_id','=',$user->id)->get();

            foreach ($posisi as $pos)
            {
                foreach ($posisiUser as $posU)
                {
                    //dd($posU->posisi_id);
                    if ($pos->id == $posU->posisi_id)
                    {
                    $pos->posisi = 1;
                    }


                }
            }

            return view('profile.editUser', compact('user', 'posisi'));
        }


        public function update($url_slug, Request $req){
            $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
            $user = User::find($profile->user_id);

            $this->authorize('update', $user->profile);

            $data = request()->validate([
                'nama' => 'required',
                'nama_lengkap' => 'required',
                'jenis_kelamin'=> '',
                'pendidikan_terakhir'=> '',
                'nomor_telepon' => '',
                'tanggal_lahir' => '',
                'tinggi_badan' => '',
                'berat_badan' => '',
                'alamat' => '',
                'social_media'=> '',
                'foto'=>'',
                'cover' => '',

            ]);


            $posisi = $req->posisi_user;
            $posisiUser = PosisiUser::where('user_id','=',$user->id)->delete();
            foreach ($posisi as $pos)
            {
                $posisiUser = new PosisiUser;
                $posisiUser->user_id = $user->id;
                $posisiUser->posisi_id = $pos;
                $posisiUser->save();
            }


            if(request('foto')){
                $fotoPath = request('foto')->store('user/profile','public');

                $foto = Image::make(public_path("image/{$fotoPath}"))->fit(1000,1000);
                $foto -> save();
                $path = "/image/{$fotoPath}";
                $fotoArray = ['foto'=> $path];
                if ($user->profile->foto != null) {
                    $oldPath = public_path($user->profile->foto);
                    if (file_exists($oldPath)) { //If it exits, delete it from folder
                        unlink($oldPath);
                    }
                }
            }

            if(request('cover')){
                $coverPath = request('cover')->store('user/cover','public');

                $cover = Image::make(public_path("image/{$coverPath}"))->save();
                $cPath = "/image/{$coverPath}";
                $coverArray = ['cover'=> $cPath];
                if ($user->profile->cover != null) {
                    $oldPath = public_path($user->profile->cover);
                    if (file_exists($oldPath)) { //If it exits, delete it from folder
                        unlink($oldPath);
                    }
                }
            }

            auth()->user()->profile->update(array_merge(
                $data,
                $fotoArray ?? [],
                $coverArray ?? []
            ));

            return redirect("/user/{$profile->url_slug}");//redirect to user's profile
        }
}
