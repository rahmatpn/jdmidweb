<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = "pekerjaan";
    protected $guarded = [];

    public function getPosisi(){
        $posisi = Posisi::whereId($this->posisi)->first();
        return $posisi->nama_posisi;
    }

    public function getAlamat(){
        $hotel = ProfileHotel::whereId($this->hotel_id)->first();
        return $hotel->alamat;
    }

    public function getNama(){
        $hotel = ProfileHotel::whereId($this->hotel_id)->first();
        return $hotel->nama;
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
        return $this->hasOne(Posisi::class);
    }

    public function countPekerja()
    {
        return $this->belongsToMany(User::class)
            ->selectRaw('count(users.id) as aggregate')
            ->groupBy('pivot_pekerjaan_id');
    }

    public function getOrdersCountAttribute()
    {
        if ( ! array_key_exists('countPekerja', $this->relations)) $this->load('countPekerja');

        $related = $this->getRelation('countPekerja')->first();

        return ($related) ? $related->aggregate : 0;
    }
}
