<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\ProfileHotel;
use App\ProfileUser;
use App\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use App\Admin;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Str;


class AdminController extends Controller
{

    public function index(){
        $pekerjaan = Pekerjaan::orderby('id')->get();
        $user = User::orderby('id')->get();
        return view('admin', compact('user', 'pekerjaan'));
    }

   public function indexUser(){
       $user = User::orderby('id')->get();
       return view('adminManageUser', compact('user'));
   }

    public function viewVerifyUser($url_slug){
        $user = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        if ($user->status_ktp == "1")
            $user->s_ktp = 1;
        if ($user->status_skck == "1")
            $user->s_skck = 1;
        if ($user->status_sertifikat == "1")
            $user->s_sertifikat = 1;
        if ($user->status_kartu_satpam == "1")
            $user->s_kartu_satpam = 1;
        return view('adminVerifyUser', compact('user'));
    }

    function verifyUser($url_slug, Request $req) {

        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $profile->status_ktp = null;
        $profile->status_skck = null;
        $profile->status_sertifikat= null;
        $profile->status_kartu_satpam= null;
        if($req->status_ktp)
            $profile->status_ktp = '1';
        if($req->status_skck)
            $profile->status_skck = '1';
        if($req->status_sertifikat)
            $profile->status_sertifikat = '1';
        if ($req->status_kartu_satpam)
            $profile->status_kartu_satpam = '1';
        $profile->save();
        return redirect('/admin/user/manage');
    }

    public function indexHotel(){
        $hotel = Hotel::orderby('id')->get();
        return view('adminManageHotel', compact('hotel'));
    }

    public function viewVerifyHotel($url_slug){
        $hotel = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        return view('adminVerifyHotel', compact('hotel'));
    }

    public function verifyHotel($url_slug){
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $profile->status_verifikasi = '1';
        $profile->save();
        return redirect('admin/seller/manage');
    }

    public function rejectHotel($url_slug){
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $profile->status_verifikasi = '0';
        $profile->save();
        return redirect('admin/seller/manage');
    }

    public function indexPekerjaan(){
        $pekerjaan = Pekerjaan::orderby('id')->get();
        return view('adminManagePekerjaan', compact('pekerjaan'));
    }

    public function viewVerifyPekerjaan($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug', '=', $url_slug)->first();
        return view('adminVerifyPekerjaan', compact('pekerjaan'));
    }
    public function verifyPekerjaan($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug', '=', $url_slug)->first();
        $pekerjaan->status = '1';
        $pekerjaan->save();
        return redirect('admin/pekerjaan/manage');
    }

    public function rejectPekerjaan($url_slug){
        $pekerjaan = Pekerjaan::where('url_slug', '=', $url_slug)->first();
        $pekerjaan->status= '0';
        $pekerjaan->save();
        return redirect('admin/pekerjaan/manage');
    }


    public function indexPosisi(){
        $posisi = Posisi::orderby('id')->get();
        return view('adminManagePosisi', compact('posisi'));
    }

    public function destroyPosisi($id){
        $posisi = Posisi::where('id','=', $id)->first();
        $posisi->delete();
        return redirect('/admin/posisi/manage');
    }

    public function viewEditPosisi($id){
        $posisi = Posisi::where('id','=', $id)->first();
        return view('adminEditPosisi', compact('posisi'));
    }

    public function editPosisi( Request $request){

        Posisi::where('id',$request->id)->update([
            'nama_posisi' => $request->nama_posisi,
            'deskripsi' => $request->deskripsi
        ]);

        return redirect('/admin/posisi/manage');
    }

    public function add(){
        return view('adminAdd');
    }

    protected function adminCreateUser(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
            $user = User::create([
                'name' => Str::slug($request['name'], ''),
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[2];
            $str = strval($errorCode);
            if (strpos($str, 'users_name_unique')) {
                return redirect()->intended('admin/user/manage')->with("gagaluser", "Nama telah terdaftar, masukan nama yang berbeda");
            } elseif (strpos($str,'users_email_unique')) {
                return redirect()->intended('admin/user/manage')->with("gagaluser", "Email telah terdaftar");
            }

        }
        return redirect('/admin/user/manage');
    }

    protected function adminCreateHotel(Request $request)
    {
        try {
            $this->validator($request->all())->validate();
            $hotel = Hotel::create([
                'name' => Str::slug($request['name'], ''),
                'email' => $request['email'],
                'password' => Hash::make($request['password']),
            ]);
        } catch (QueryException $e) {
            $errorCode = $e->errorInfo[2];
            $str = strval($errorCode);
            if (strpos($str, 'hotels_name_unique')) {
                return redirect()->intended('admin/seller/manage')->with("gagalhotel", "Nama Hotel telah terdaftar, masukan nama yang berbeda");
            } elseif (strpos($str,'hotels_email_unique')) {
                return redirect()->intended('admin/seller/manage')->with("gagalhotel", "Email telah terdaftar");
            }
        }
        return redirect('/admin/seller/manage');
    }

    protected function createPosisi(Request $request)
    {

            $this->validatorPosisi($request->all())->validate();
            $posisi = Posisi::create([
                'nama_posisi' => Str::ucfirst($request['nama_posisi']),
                'deskripsi' => Str::ucfirst($request['deskripsi'])
            ]);

        return redirect('/admin/posisi/manage');
    }

    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    protected function validatorPosisi(array $data)
    {
        return Validator::make($data, [
            'nama_posisi' => ['required', 'string', 'max:20'],
            'deskripsi' => ['required','string'],
        ]);
    }

}
