<?php

namespace App\Http\Controllers;

use App\ProfileUser;
use App\User;
use Illuminate\Http\Request;

class ProfileUserController extends Controller
{
        public function indexUser(User $user){
            return view('profile.user', compact('user'));
        }

        public function edit (User $user){
            return view('profile.editUser', compact('user'));
        }


        public function update(User $user){

            $profile= ProfileUser::findOrFail($user->id);
            $data = request()->validate([
                'nama' => 'required',
                'nama_lengkap' => 'required',
                'nomor_telepon' => '',
                'alamat' => '',
                'social_media'=> '',
                'foto'=>''
            ]);
            $profile->update($data);

            return redirect("/user/{$user->id}");
        }
}
