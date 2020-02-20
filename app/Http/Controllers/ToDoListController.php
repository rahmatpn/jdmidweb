<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use Illuminate\Http\Request;

class ToDoListController extends Controller{
    //

    public function create($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        return view('todolist.postlist');
    }
    public function input($url_slug){

        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();

        $data = request()->validate([
            'nama_pekerjaan'=>'required'
        ]);
        $pekerjaan->todolist()->create($data);


        return view('jobs.job', compact('pekerjaan'));

    }


}
