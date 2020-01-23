<?php

namespace App\Http\Controllers;

use App\Pekerjaan;
use Illuminate\Http\Request;

class PekerjaanController extends Controller
{
    //
    public function add()
    {

        return view('postjob');
    }

    public function store(Request $request)
    {
        $pekerjaan= Pekerjaan::findOrFail($request->id);
        // insert data ke table pegawai
        DB::table('pekerjaan')->insert([
            'posisi' => $request->posisi,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'kuota' => $request->kuota,
            'bayaran' => $request->bayaran,
            'deskripsi' => $request->deskripsi
        ]);
        // alihkan halaman ke halaman pegawai
        return redirect('/hotel/{hotel}');

    }
}
