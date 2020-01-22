<?php

namespace App\Http\Controllers;

use App\ProfileUser;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Intervention\Image\Facades\Image;

class ProfileUserController extends Controller
{
        public function indexUser(User $user){
            return view('profile.user', compact('user'));
        }

        public function edit (User $user){
            $this->authorize('update', $user->profile);
            return view('profile.editUser', compact('user'));
        }


        public function update(User $user){
            $this->authorize('update', $user->profile);

            $data = request()->validate([
                'nama' => 'required',
                'nama_lengkap' => 'required',
                'jenis_kelamin'=> '',
                'nomor_telepon' => '',
                'alamat' => '',
                'social_media'=> '',
                'foto'=>'',

            ]);


            if(request('foto')){
                $fotoPath = request('foto')->store('profile','public');

                $foto = Image::make(public_path("storage/{$fotoPath}"))->fit(1000,1000);
                $foto->save();
            }



            auth()->user()->profile->update(array_merge(
                $data,
                ['foto'=> $fotoPath]
            ));

            return redirect("/user/{$user->id}");
        }
}
