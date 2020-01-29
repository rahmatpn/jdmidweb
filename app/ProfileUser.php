<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $table = "user_profiles";
    protected $guarded = [];

    public function profileFoto(){
        return ($this->foto) ? $this->foto : 'image/user/profile/Q8QsrapijI7Y4TdaKMO08tnvcvH0p1Z8Ni9BaLdr.jpeg';
    }


    public function profileCover(){
        return ($this -> cover) ?  $this->cover : '/image/user/cover/qj8MLkgRDV8E8WFk86txcFQ9guFZOZyEfRafS77D.webp';
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
