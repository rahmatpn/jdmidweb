<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    public function dikerjakan(){
        return $this->belongsToMany(User::class);
    }

    public function hotel(){
        return $this->belongsTo(Hotel::class);
    }
}
