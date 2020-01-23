<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pekerjaan extends Model
{
    protected $table = "pekerjaan";
    protected $guarded = [];

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
}
