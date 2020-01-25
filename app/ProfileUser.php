<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $table = "user_profiles";
    protected $guarded = [];

    public function profileFoto(){
        $fotoPath = ($this->foto) ? $this->foto : 'user/profile/Q8QsrapijI7Y4TdaKMO08tnvcvH0p1Z8Ni9BaLdr.jpeg';
        return '/image/' . $fotoPath;
    }


    public function profileCover(){
        $coverPath = ($this -> cover) ?  $this->cover : 'user/cover/qj8MLkgRDV8E8WFk86txcFQ9guFZOZyEfRafS77D.webp';
        return '/image/' . $coverPath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
