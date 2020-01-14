<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHotel extends Model
{
    protected $table = "hotel_profiles";
    protected $guarded = [];

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
