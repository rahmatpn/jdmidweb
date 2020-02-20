<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    protected $table = "todolist";
    protected $fillable = ['nama_pekerjaan'];

    public function pekerjaan(){
        return $this->belongsTo(Pekerjaan::class);
    }

    public function getPekerjaan(){
        $posisi = Pekerjaan::whereId($this->posisi_id)->first();
        return $posisi->nama_posisi;
    }

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
