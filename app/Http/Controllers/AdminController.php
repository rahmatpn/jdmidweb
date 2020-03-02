<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\ProfileHotel;
use App\ProfileUser;
use App\User;


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

    public function verifyUser($url_slug){
        $user = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        return view('adminVerifyUser', compact('user'));
    }

    public function verifyUserKtp($url_slug){
        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $profile->status_ktp = '1';
        $profile->save();
        return redirect('admin/user/'.$profile->url_slug.'/verify');
    }

    public function rejectUserKtp($url_slug){
        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $profile->status_ktp = '0';
        $profile->save();
        return redirect('admin/user/'.$profile->url_slug.'/verify');
    }

    public function verifyUserSkck($url_slug){
        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $profile->status_skck = '1';
        $profile->save();
        return redirect('admin/user/'.$profile->url_slug.'/verify');
    }

    public function rejectUserSkck($url_slug){
        $profile = ProfileUser::where('url_slug', '=', $url_slug)->with('user')->first();
        $profile->status_skck = '0';
        $profile->save();
        return redirect('admin/user/'.$profile->url_slug.'/verify');
    }

    public function viewVerifyHotel($url_slug){
        $hotel = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        return view('adminVerifyHotel', compact('hotel'));
    }

    public function verifyHotel($url_slug){
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $profile->status_verifikasi = '1';
        $profile->save();
        return redirect('admin/hotel/manage');
    }

    public function rejectHotel($url_slug){
        $profile = ProfileHotel::where('url_slug', '=', $url_slug)->with('hotel')->first();
        $profile->status_verifikasi = '0';
        $profile->save();
        return redirect('admin/hotel/'.$profile->url_slug.'/verify');
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

    public function indexHotel(){
        $hotel = Hotel::orderby('id')->get();
        return view('adminManageHotel', compact('hotel'));
    }

    public function indexPekerjaan(){
        $pekerjaan = Pekerjaan::orderby('id')->get();
        return view('adminManagePekerjaan', compact('pekerjaan'));
    }

    public function add(){
        return view('adminAdd');
    }
}
