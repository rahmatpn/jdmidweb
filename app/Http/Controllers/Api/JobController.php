<?php

namespace App\Http\Controllers\Api;

use App\Hotel;
use App\Http\Controllers\Controller;
use App\Pekerjaan;
use App\ProfileHotel;
use Illuminate\Http\Request;

class JobController extends Controller
{
    function getAllJobs(){
        return response()->json(['jobs'=>Pekerjaan::all()]);
    }

    function getJobs($query){
        $hotel_id = ProfileHotel::where('nama','like','%'.$query.'%')->pluck('hotel_id')->toArray();
        return response()->json(['jobs'=>Pekerjaan::where('deskripsi','like','%'.$query.'%')
            ->orWhere('area','like','%'.$query.'%')
            ->orWhere('hotel_id', !empty($hotel_id) ? $hotel_id : "")
            ->get()]);
    }

    function getJobsWithPosition($position){
        return response()->json(['jobs'=>Pekerjaan::where('posisi',$position)->get()]);
    }
}
