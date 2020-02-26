<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\ProfileHotel;
use App\ToDoList;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;
use phpDocumentor\Reflection\Types\Null_;

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

        return redirect('/hotel/'.auth()->user()->profile->url_slug)->with('success','Hore, Lowongan anda berhasil di post');
    }

    public function show($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        return view('jobs.job', compact('pekerjaan'));
    }

    public function edit($url_slug){
        // mengambil data pegawai berdasarkan url_slug yang dipilih
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        // passing data pegawai yang didapat ke view edit.blade.php
        return view('jobs.editJob',compact('pekerjaan'));
    }

    public function update(Request $request){
        Pekerjaan::where('id',$request->id)->update([
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
        if(Auth::guard('hotel')->user() != null){
            return redirect('/hotel/'.auth()->user()->profile->url_slug)->with('success','Data Telah Diupdate!');
        }else
            return redirect('/admin/pekerjaan/manage');
    }

    public function delete($url_slug){
        DB::table('pekerjaan')->where('url_slug', $url_slug)->delete();
        if(Auth::guard('hotel')->user() != null){
            return redirect('/hotel/'.auth()->user()->profile->url_slug)->with('success','Data Telah Dihapus');
        }else
            return back();


    }

    public function apply($url_slug){
        $user = Auth::user();
        $profile = $user->profile;
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        $currentJob = Pekerjaan::where('url_slug','=', $url_slug)->first();

        $currentJob->tinggi_minimal = $currentJob->tinggi_minimal == null ? PHP_INT_MIN : $currentJob->tinggi_minimal;
        $currentJob->tinggi_maksimal = $currentJob->tinggi_maksimal == null ? PHP_INT_MAX : $currentJob->tinggi_maksimal;
        $currentJob->berat_minimal = $currentJob->berat_minimal == null ? PHP_INT_MIN : $currentJob->berat_minimal;
        $currentJob->berat_maksimal = $currentJob->berat_maksimal == null ? PHP_INT_MAX : $currentJob->berat_maksimal;

        if (!$profile->isCompleted)
            return redirect('/user/'.$profile->url_slug.'/edit')->with('gagalProfile','Profile belum lengkap');
        elseif ($currentJob->isExpired){
            return redirect('/home')->with('expired','Job sudah expired');
        }
        elseif ($currentJob->tinggi_minimal > $profile->tinggi_badan && $currentJob->tinggi_maksimal > $profile->tinggi_badan){
//            if ($user->profile->tinggi_badan < $pekerjaan->tinggi_minimal || $user->profile->tinggi_badan > $pekerjaan->tinggi_maksimal)
            return back()->with('gagalTinggi', 'Tinggi badan anda tidak sesuai kriteria');
        }
        elseif($currentJob->berat_minimal > $profile->berat_badan && $currentJob->berat_maksimal > $profile->berat_badan) {
//         if($profile->berat_badan < $pekerjaan->berat_minimal || $profile->berat_badan > $pekerjaan->berat_maksimal)
            return back()->with('gagalBerat', 'Berat badan anda tidak seusai Kriteria');
        }
        elseif($currentJob->dikerjakan->count() >= $currentJob->kuota)
            return back()->with('kuotaPenuh', 'Kuota Penuh');
        else {
        $user->mengerjakan()->toggle($pekerjaan);
        return back()->with('success','Berhasil apply pekerjaan di '.$pekerjaan->hotel->profile->nama);
        }
    }

    public function showList($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->with('todolist')->first();
        return view('todolist.postlist', compact('pekerjaan'));
    }

    public function todolist($url_slug){

        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();

        $data = request()->validate([
            'nama_pekerjaan'=>'required'
        ]);
        $pekerjaan->todolist()->create($data);



//        return view('jobs.job', compact('pekerjaan'));
        return back();
    }

    public function editList($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->with('todolist')->first();
        return view('todolist.postlist', compact('pekerjaan'));
    }

    public function  updateList(Request $request){
        foreach (array_combine($request->id, $request->nama_pekerjaan) as $id => $nama_pekerjaan) {
            ToDoList::where('id', $id)->update([
                'nama_pekerjaan' => $nama_pekerjaan
            ]);
        }
        return back();
    }

    public function deleteList($url_slug , $id){
        ToDoList::where('id', $id)->delete();
        return back()->with('success','Data Telah Dihapus');
        //test
    }

}
