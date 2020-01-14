<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Hotel extends Model
{
    public function profile(){
        return $this->hasOne(ProfileHotel::class);
    }

    public function pekerjaan(){
        return $this->hasMany(Pekerjaan::class);
    }

}
