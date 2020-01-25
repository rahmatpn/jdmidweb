<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ProfileUser extends Model
{
    protected $table = "user_profiles";
    protected $guarded = [];

    public function profileFoto(){
        $fotoPath = ($this->foto) ? $this->foto : 'profile/sySLPMyFaPvrI1q1J66MkszEf93I0KU0hpRGWKEl.jpeg';
        return '/uploads/' . $fotoPath;
    }


    public function profileCover(){
        $coverPath = ($this -> cover) ?  $this->cover : 'cover/13tmaSkei38pPXsjvcHDOWMGHAoXkEXDtBdD6ROt.jpeg';
        return '/uploads/' . $coverPath;
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
