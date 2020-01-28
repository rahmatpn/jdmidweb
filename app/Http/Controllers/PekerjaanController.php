<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    //


    public function create()
    {
        return view('jobs.postjob');
    }

    public function store()
    {
        $data = request()->validate([
            'posisi'=>'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'kuota' => 'required',
            'bayaran' => 'required',
            'deskripsi' => ''
        ]);
        Pekerjaan::find($data)->with('posisi')->get();
        auth()->user()->pekerjaan()->create($data);

        return redirect('/hotel/'.auth()->user()->id);


    }

}
