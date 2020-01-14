<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ToDoList extends Model
{
    public function pekerjaan(){
        return $this->belongsTo(Pekerjaan::class);
    }
}
