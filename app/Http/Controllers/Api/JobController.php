<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pekerjaan;
use App\ProfileHotel;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    function getAllJobs(){
        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->get()]);
    }

    function getJobs($query){
        $hotel_id = ProfileHotel::where('nama','like','%'.$query.'%')
                ->pluck('hotel_id')
                ->toArray();

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where('deskripsi','like','%'.$query.'%')
                ->orWhere('area','like','%'.$query.'%')
                ->orWhere('hotel_id', !empty($hotel_id) ? $hotel_id : "")
                ->get()]);
    }

    function getJobsWithPosition($position){
        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where('posisi',$position)
                ->get()]);
    }

    function applyJob($job){
        $user = Auth::user();
        $profile = $user->profile;
        $currentJob = Pekerjaan::find($job);

        $currentJob->tinggi_minimal = $currentJob->tinggi_minimal == null ? PHP_INT_MIN : $currentJob->tinggi_minimal;
        $currentJob->tinggi_maksimal = $currentJob->tinggi_maksimal == null ? PHP_INT_MAX : $currentJob->tinggi_maksimal;
        $currentJob->berat_minimal = $currentJob->berat_minimal == null ? PHP_INT_MIN : $currentJob->berat_minimal;
        $currentJob->berat_maksimal = $currentJob->berat_maksimal == null ? PHP_INT_MAX : $currentJob->berat_maksimal;

        if($currentJob->dikerjakan->count() < $currentJob->kuota)
            return response()->json($user->mengerjakan()->toggle(Pekerjaan::findOrFail($job)));

        else if ($currentJob->tinggi_minimal <= $profile->tinggi_badan && $currentJob->tinggi_maksimal >= $profile->tinggi_badan)
            return response()->json(['message'=>'Tinggi tidak memenuhi'],Response::HTTP_FORBIDDEN);

        else if ($currentJob->berat_minimal <= $profile->berat_badan && $currentJob->berat_maksimal >= $profile->berat_badan)
            return response()->json(['message'=>'Berat tidak memenuhi'],Response::HTTP_FORBIDDEN);

        else
            return response()->json(['message'=>'Kuota sudah penuh'],Response::HTTP_FORBIDDEN);
    }
}
