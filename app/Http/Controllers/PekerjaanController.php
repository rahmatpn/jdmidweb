<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\ProfileHotel;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
            'posisi_id'=>'required',
            'tanggal_mulai' => 'required',
            'waktu_mulai' => 'required',
            'waktu_selesai' => 'required',
            'tinggi_minimal' => '',
            'tinggi_maksimal' => '',
            'berat_minimal' => '',
            'berat_maksimxal' => '',
            'kuota' => 'required',
            'bayaran' => 'required',
            'deskripsi' => 'required'
        ]);

        $data['url_slug'] = Str::slug($data['area'].' '.time(), "-");

        auth()->user()->pekerjaan()->create($data);

        return redirect('/hotel/'.auth()->user()->profile->url_slug);

    }
    public function show($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        return view('jobs.job', compact('pekerjaan'));
    }
    public function edit($url_slug){
        // mengambil data pegawai berdasarkan url_slug yang dipilih
        $pekerjaan = DB::table('pekerjaan')->where('url_slug',$url_slug)->get();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('jobs.editJob',['pekerjaan' => $pekerjaan]);
    }
    public function update(Request $request){

        DB::table('pekerjaan')->where('id',$request->id)->update([
            'area' => $request->area,
            'posisi_id'=>$request->posisi_id,
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
        return redirect('/hotel/'.auth()->user()->profile->url_slug)->with('success','Data Telah Diupdate!');

    }
    public function delete($url_slug){
        DB::table('pekerjaan')->where('url_slug', $url_slug)->delete();
        return redirect('/hotel/'.auth()->user()->profile->url_slug)->with('success','Data Telah Dihapus');
    }


    public function apply($url_slug){
        $user = Auth::user();
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        $user->mengerjakan()->toggle($pekerjaan);

        return redirect('/home');


    }

}
