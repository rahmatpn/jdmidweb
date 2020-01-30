<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
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

        auth()->user()->pekerjaan()->create($data);

        return redirect('/hotel/'.auth()->user()->id);


    }
    public function show(\App\Pekerjaan $pekerjaan){
        $hotel = Hotel::find('');
        return view('jobs.job', compact('pekerjaan'));
    }

}
