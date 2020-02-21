<?php

namespace App\Http\Controllers;

use App\Hotel;
use App\Pekerjaan;
use App\Posisi;
use App\User;
use Illuminate\Http\Request;


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

    public function indexHotel(){
        $hotel = Hotel::orderby('id')->get();
        return view('adminManageHotel', compact('hotel'));
    }

    public function indexPekerjaan(){
        $pekerjaan = Pekerjaan::orderby('id')->get();
        return view('adminManagePekerjaan', compact('pekerjaan'));
    }



}
