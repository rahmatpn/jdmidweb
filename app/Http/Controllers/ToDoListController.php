<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ToDoListController extends Controller{
    //

    public function create(){
        return view('todolist.postlist');
    }


}
