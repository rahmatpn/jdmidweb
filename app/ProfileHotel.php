<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHotel extends Model
{
    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
