<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $table = "user_profiles";
    protected $guarded = [];

    public function profileFoto(){
        $fotoPath = ($this->foto) ? $this->foto : 'profile/l2NM4Fkhl7zQnzhTaCZOwZgqiFEYKTjQOH44JoJp.jpeg';
        return '/storage/' . $fotoPath;
    }


    public function profileCover(){
        $coverPath = ($this -> cover) ?  $this->cover : 'profile/UAR7eKcW474ycXcmueWKrxs290hUwWHXxuzHKAW2.jpeg';
        return '/storage/' . $coverPath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
