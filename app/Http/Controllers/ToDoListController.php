<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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

    public function deleteList($id){
        DB::table('todolist')->where('id', $id)->delete();
        return back()->with('success','Data Telah Dihapus');
    }

}
