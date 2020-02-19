<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Auth;

class Pekerjaan extends Model
{
    protected $table = "pekerjaan";
    protected $guarded = [];
    protected $appends = array('isApplied');

    public function getPosisi(){
        $posisi = Posisi::whereId($this->posisi_id)->first();
        return $posisi->nama_posisi;
    }

    public function getAlamat(){
        $hotel = ProfileHotel::whereId($this->hotel_id)->first();
        return $hotel->alamat;
    }

    public function getNama(){
        $profil = ProfileHotel::whereId($this->hotel_id)->first();
        return $profil->nama;
    }

    public function getPekerjaan(){
        $pekerjaan = Pekerjaan::all();
        return $pekerjaan;
    }

    public function getSocial(){
        $hotel = ProfileHotel::whereId($this->hotel_id)->first();
        return $hotel->social_media;
    }


    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function dikerjakan(){
        return $this->belongsToMany(User::class);
    }

    public function todolist(){
        return $this->hasMany(ToDoList::class);
    }

    public function posisi(){
        return $this->hasOne(Posisi::class, 'id', 'posisi_id');
    }

    private function isApplied(){
        if ($this->dikerjakan()->where('user_id',Auth::id())->count() == 1)
            return true;
        else
            return false;
    }

    public function getIsAppliedAttribute(){
        return $this->isApplied();
    }
}
