<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileHotel extends Model
{
    protected $table = "hotel_profiles";
    protected $guarded = [];

    public function hotelPhoto(){
        $fotoPath = ($this->foto) ? $this->foto : '/image/hotel/photo/SoT63YrEf7pfluOCxALtvyz9XMELNpGJACIBdtJ9.png';
        return $fotoPath;
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
