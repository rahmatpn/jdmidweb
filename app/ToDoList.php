<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    protected $table = "todolist";
    public function pekerjaan(){
        return $this->belongsTo(Pekerjaan::class);
    }
}
