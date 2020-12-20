<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;
use Laravel\Scout\Searchable;
use Laravel\Scout\SearchableScope;

class Pekerjaan extends Model
{
    protected $table = "pekerjaan";
    protected $guarded = [];
    protected $appends = array('isApplied', 'isExpired');

    public function getPosisi(){
        $posisi = Posisi::whereId($this->posisi_id)->first();
        return $posisi->nama_posisi;
    }

    public function getAlamat(){
        $hotel = ProfileHotel::whereId($this->hotel_id)->first();
        return $hotel->alamat;
    }
    public function getHP(){
        $hotel = ProfileHotel::whereId($this->hotel_id)->first();
        return $hotel->nomor_telepon;
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
    public function getTodo(){
        $todolist = ToDoList::where($this->pekerjaan_id)->first();
        return $todolist->nama_pekerjaan;
    }

    public function toSearchableArray()
    {
        $array = $this->toArray();

        return array('area' => $array['area'],'deskripsi' => $array['deskripsi']);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }

    public function dikerjakan(){
        return $this->belongsToMany(User::class, 'pekerjaan_user')->withTimestamps()->withPivot('status');
    }

    public function diterima(){
        return $this->belongsToMany(User::class, 'pekerjaan_user')->withTimestamps()->withPivot('status')->where('status', '!=', '0');
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

    private function isExpired(){
        $date = Carbon::now()->toDateString();
        $time = Carbon::now()->toTimeString();
        if ($this->tanggal_mulai > $date || $this->tanggal_mulai == $date && $this->waktu_mulai > $time)
            return false;
        return true;
    }

    public function getIsExpiredAttribute(){
        return $this->isExpired();
    }
}
