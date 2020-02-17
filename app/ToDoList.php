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

    public function user(){
        return $this->belongsToMany(User::class);
    }
}
