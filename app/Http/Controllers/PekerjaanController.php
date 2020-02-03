<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

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
            'area' => 'required',
            'posisi'=>'required',
            'tanggal_mulai' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'tinggi_minimal' => '',
            'tinggi_maksimal' => '',
            'berat_minimal' => '',
            'berat_maksimal' => '',
            'kuota' => 'required',
            'bayaran' => 'required',
            'deskripsi' => ''
        ]);

        $data['url_slug'] = Str::slug($data['area'].' '.time(), "-");

        auth()->user()->pekerjaan()->create($data);

        return redirect('/hotel/'.Str::slug(auth()->user()->profile->nama, '').'/'.$data['url_slug']);

    }
    public function show(Pekerjaan $pekerjaan){
        return view('jobs.job', compact('pekerjaan'));
    }
    public function edit($id){
        // mengambil data pegawai berdasarkan id yang dipilih
        $pekerjaan = DB::table('pekerjaan')->where('id',$id)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('jobs.editJob',['pekerjaan' => $pekerjaan]);
    }
    public function update(Request $request){
        DB::table('pekerjaan')->where('id',$request->id)->update([
            'area' => $request->area,
            'posisi'=>$request->posisi,
            'tanggal_mulai' => $request->tanggal_mulai,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'tinggi_minimal' => $request->tinggi_minimal,
            'tinggi_maksimal' => $request ->tinggi_maksimal,
            'berat_minimal' => $request ->berat_minimal,
            'berat_maksimal' => $request ->berat_maksimal,
            'kuota' => $request->kuota,
            'bayaran' => $request->bayaran,
            'deskripsi' => $request->deskripsi
        ]);
        return redirect('/hotel/'.auth()->user()->id)->with('success','Data Telah Diupdate!');

    }
    public function delete($id){
        DB::table('pekerjaan')->where('id', $id)->delete();
        return redirect('/hotel/'.auth()->user()->id)->with('success','Data Telah Dihapus');
    }


}
