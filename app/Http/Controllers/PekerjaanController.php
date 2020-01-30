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
            'judul' => 'required',
            'area' => 'required',
            'posisi'=>'required',
            'tanggal_mulai' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'tingi_minimal' => '',
            'tingi_maksimal' => '',
            'berat_minimal' => '',
            'berat_maksimal' => '',
            'kuota' => 'required',
            'bayaran' => 'required',
            'deskripsi' => ''
        ]);

        auth()->user()->pekerjaan()->create($data);

        return redirect('/hotel/'.auth()->user()->id);


    }
    public function show(Pekerjaan $pekerjaan){
        return view('jobs.job', compact('pekerjaan'));
    }


}
