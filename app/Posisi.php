<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Posisi extends Model
{
    protected $table = "posisi";
    protected $fillable = ['nama_posisi', 'deskripsi'];
    public $timestamps = false;

    public function user(){
        return $this->belongsToMany(User::class);
    }

    public function pekerjaan(){
        return $this->belongsToMany(Pekerjaan::class);
    }
}
