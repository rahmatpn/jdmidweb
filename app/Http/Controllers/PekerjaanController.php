<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\ProfileHotel;
use App\ProfileUser;
use App\ToDoList;
use App\TodolistUser;
use App\User;
use Illuminate\Support\Carbon;
use Laravel\Scout\Searchable;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use Illuminate\Validation\Validator;
use Intervention\Image\Facades\Image;
use phpDocumentor\Reflection\Types\Null_;
use function GuzzleHttp\Psr7\copy_to_string;

class PekerjaanController extends Controller
{
    //


    public function create()
    {
        $hotel = auth()->guard('hotel')->user()->profile;
        // if($hotel->status_verifikasi != 1)
        //     return redirect('/hotel/'.$hotel->url_slug)->with('gagalVerifikasi', 'Profile belum diverifikasi, silakan hubungi admin');
        // else
        return view('jobs.postjob');
    }

    public function store()
    {

        $data = request()->validate([
            'area' => 'required',
            'posisi_id'=>'required',
            'tanggal_mulai' => '',
            'mesin' => '',
            'dimensi' => '',
            'tinggi_minimal' => '',
            'tinggi_maksimal' => '',
            'berat_minimal' => '',
            'berat_maksimal' => '',
            'kuota' => '',
            'warna' => '',
            'transmisi' => '',
            'kondisi' => '',
            'bayaran' => '',
            'deskripsi' => '',
            'foto' => ''
        ]);

        $data['url_slug'] = Str::slug($data['area'].' '.time(), "-");
//        auth()->user()->pekerjaan()->create($data);

        if (request('foto')) {
            $fileFoto = request('foto');
            $foto = $fileFoto->move('image/hotel/job/', time(). '.' . $fileFoto->getClientOriginalExtension());
            $imageSize = getimagesize($foto);
            if ($imageSize[0] < $imageSize[1])
                $size = $imageSize[0];
            else
                $size = $imageSize[1];
            Image::make($foto)->fit($size)->save($foto);
            $data['foto'] = $foto;
        }
        else {
            $data['foto'] = \auth()->user()->profile->foto;
        }

        auth()->user()->pekerjaan()->create(
            $data
        );


        return redirect('/hotel/'.auth()->user()->profile->url_slug)->with('success','Hore, Lowongan anda berhasil di post');
    }

    public function wishlist() {
        $user = \auth()->guard('user')->user()->mengerjakan()->get();

       return view('jobs.wishlist', compact('user'));
    }

    public function show($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        $pelamars = $pekerjaan->dikerjakan()->with('profile')->get();
        $pelamarDiterima = $pekerjaan->dikerjakan()->where('status', '>=', '1')->get();
        $pelamarSelesai = $pekerjaan->dikerjakan()->where('status', '2')->get();
        $user = Auth::guard('user')->user();
//        dd($pekerjaan->getIsAppliedAttribute());
        return view('jobs.job', compact('pekerjaan','pelamars', 'pelamarDiterima', 'pelamarSelesai','user'));
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
            'mesin' => $request->mesin,
            'dimensi' => $request->dimensi,
            'tinggi_minimal' => $request->tinggi_minimal,
            'tinggi_maksimal' => $request ->tinggi_maksimal,
            'berat_minimal' => $request ->berat_minimal,
            'berat_maksimal' => $request ->berat_maksimal,
            'kuota' => $request->kuota,
            'bayaran' => $request->bayaran,
            'warna' => $request->warna,
            'transmisi' => $request->transmisi,
            'kondisi' => $request->kondisi,
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

     
            $user->mengerjakan()->toggle($pekerjaan);
            return back()->with('success','Berhasil apply pekerjaan di '.$pekerjaan->hotel->profile->nama);
        
    }

    public function acceptApply($slug, $url_slug ){
        $user = ProfileUser::where('url_slug', '=', $url_slug)->first();
        $pekerjaan = Pekerjaan::where('url_slug','=', $slug)->first();
        $statusPekerjaan = $pekerjaan->dikerjakan()->where('user_id', $user->id)->first()->pivot;
        $statusPekerjaan->status = '1';
        $statusPekerjaan->save();
        return redirect('/job/'.$slug);
    }

    public function confirmDone($slug, $url_slug ){
        $user = ProfileUser::where('url_slug', '=', $url_slug)->first();
        $pekerjaan = Pekerjaan::where('url_slug','=', $slug)->first();
        $statusPekerjaan = $pekerjaan->dikerjakan()->where('user_id', $user->id)->first()->pivot;
        $statusPekerjaan->status = '3';
        $statusPekerjaan->save();
        return redirect('/job/'.$slug);
    }

    public function confirmFinish($slug, $url_slug ){
        $user = ProfileUser::where('url_slug', '=', $url_slug)->first();
        $pekerjaan = Pekerjaan::where('url_slug','=', $slug)->first();
        $pekerjaan->dikerjakan()->updateExistingPivot($user->id, ['status' => '4']);
        return redirect('/joblist');
    }

    public function resetJob($slug, $url_slug ){
        $user = ProfileUser::where('url_slug', '=', $url_slug)->first();
        $pekerjaan = Pekerjaan::where('url_slug','=', $slug)->first();
        $statusPekerjaan = $pekerjaan->dikerjakan()->where('user_id', $user->id)->first()->pivot;
        $todolistUser = TodolistUser::where('user_id', '=', $user->id)->delete();
        $statusPekerjaan->status = '1';
        $statusPekerjaan->save();
        return redirect('/job/'.$slug);
    }

    public function rejectApply($slug, $url_slug){
        $user = ProfileUser::where('url_slug', '=', $url_slug)->first();
        $pekerjaan = Pekerjaan::where('url_slug','=', $slug)->first();
        $pekerjaan->dikerjakan()->toggle($user);
        return redirect('/job/'.$slug);

    }

    public function cancelApply($slug, $url_slug){
        $user = Auth::guard('user')->user()->profile;
        $pekerjaan = Pekerjaan::where('url_slug','=', $slug)->first();
        $pekerjaan->dikerjakan()->toggle($user);
        return redirect('/viewJob/'.$slug);

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
    public function detailList($url_slug)
    {
        $pekerjaan = Pekerjaan::where('url_slug', '=', $url_slug)->first();
        $user = Auth::guard('user')->user();
        $kerjakan = $user->mengerjakan()->where('url_slug',$url_slug)->first();
        $todolist = ToDoList::where('pekerjaan_id', $pekerjaan->id)->get();
        $todolistUser = TodolistUser::where('user_id', $user->id)->get();
        foreach ($todolist as $to) {
            foreach ($todolistUser as $tdU) {
                //dd($posU->posisi_id);
                if ($to->id == $tdU->todolist_id) {
                    $to->todo = 1;
                }
            }
        }
            return view('todolist.todolist', compact('pekerjaan', 'kerjakan', 'user', 'todolist'));

    }

    function updateJobProgress($url_slug, Request $req) { //id = jobId
        $user = \auth()->guard('user')->user();
        $pekerjaan = Pekerjaan::where('url_slug','=', $url_slug)->first();
        if ($req->todolist_user) {
            $todolist = $req->todolist_user;
            $todolistUser = TodolistUser::where('user_id', '=', $user->profile->id)->delete();
            if ($todolist != null) {
                foreach ($todolist as $td) {
                    $todolistUser = new TodolistUser();
                    $todolistUser->user_id = $user->profile->id;
                    $todolistUser->todolist_id = $td;
                    $todolistUser->save();
                }
            }
        }
        if (\auth()->user()->todolist->count() == $pekerjaan->todolist->count()) {
            $pekerjaan->dikerjakan()->updateExistingPivot(\auth()->id(), ['status' => '2']);
            return redirect('/joblist');
            } else {
            return redirect('/joblist/'.$pekerjaan->url_slug.'/todolist');
            }
    }

    public function searchs(Request $req){
        $searchTerm = $req->searchTerm;
        $hotel_id = ProfileHotel::where('nama','like','%'.$searchTerm.'%')
            ->pluck('hotel_id')
            ->toArray();
        if (empty($hotel_id))
            $hotel_id = -1;
        $posisi_id = Posisi::where('nama_posisi','like','%'.$searchTerm.'%')
            ->pluck('id')
            ->toArray();
        if (empty($posisi_id))
            $posisi_id = -1;

        $date = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString();
        $time = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toTimeString();

        $pekerjaan = Pekerjaan::with('hotel.profile')
            ->with('posisi')
            ->withCount('dikerjakan')
            ->where('status', '1')
            ->where(function ($q) use ($searchTerm, $hotel_id, $posisi_id){
                $q->Where('hotel_id', $hotel_id)
                    ->orwhere('deskripsi','like','%'.$searchTerm.'%')
                    ->orWhere('area','like','%'.$searchTerm.'%')
                    ->orWhere('posisi_id', $posisi_id);
            })->orderBy('tanggal_mulai')->get();


        return view('/search', compact('pekerjaan', 'searchTerm'));
    }
}
