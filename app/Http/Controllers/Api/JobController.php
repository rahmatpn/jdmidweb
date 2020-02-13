<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pekerjaan;
use App\ProfileHotel;
use Illuminate\Http\Response;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Auth;

class JobController extends Controller
{
    function getAllJobs(){
        $date = Carbon::now()->toDateString();
        $time = Carbon::now()->toTimeString();
        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where(function ($q) use($date, $time){
                    $q->where('tanggal_mulai','>',$date)
                        ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time);
                })
                ->orderBy('tanggal_mulai')
                ->get()]);
    }

    function getJobs($query){
        $hotel_id = ProfileHotel::where('nama','like','%'.$query.'%')
                ->pluck('hotel_id')
                ->toArray();

        $date = Carbon::now()->toDateString();
        $time = Carbon::now()->toTimeString();

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where(function ($q) use($date, $time){
                    $q->where('tanggal_mulai','>',$date)
                        ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time);
                })
                ->where('tanggal_mulai','>',$date)
                ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time)
                ->where(function ($q) use ($query){
                    $q->where('deskripsi','like','%'.$query.'%')
                        ->orWhere('area','like','%'.$query.'%')
                        ->orWhere('hotel_id', !empty($hotel_id) ? $hotel_id : "");
                })
                ->orderBy('tanggal_mulai')
                ->get()]);
    }

    function getJobsWithPosition($position){
        $date = Carbon::now()->toDateString();
        $time = Carbon::now()->toTimeString();

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where('posisi_id',$position)
                ->where(function ($q) use($date, $time){
                    $q->where('tanggal_mulai','>',$date)
                        ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time);
                })
                ->orderBy('tanggal_mulai')
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

        $date = Carbon::now()->toDateString();
        $time = Carbon::now()->toTimeString();

        $isExpired = true;

        if ($currentJob->tanggal_mulai > $date || $currentJob->tanggal_mulai == $date && $currentJob->waktu_mulai > $time)
            $isExpired = false;

        if($currentJob->dikerjakan->count() >= $currentJob->kuota)
            return response()->json(['message'=>'Kuota sudah penuh'],Response::HTTP_FORBIDDEN);

        elseif ($isExpired)
            return response()->json(['message'=>'Job sudah expired'], Response::HTTP_FORBIDDEN);
        elseif (!$profile->isCompleted)
            return response()->json(['message'=>'Silakan melengkapi profil'], Response::HTTP_FORBIDDEN);
        elseif ($currentJob->tinggi_minimal <= $profile->tinggi_badan && $currentJob->tinggi_maksimal >= $profile->tinggi_badan)
            return response()->json(['message'=>'Tinggi tidak memenuhi'],Response::HTTP_FORBIDDEN);
        elseif ($currentJob->berat_minimal <= $profile->berat_badan && $currentJob->berat_maksimal >= $profile->berat_badan)
            return response()->json(['message'=>'Berat tidak memenuhi'],Response::HTTP_FORBIDDEN);

        else
            return response()->json($user->mengerjakan()->toggle(Pekerjaan::findOrFail($job)));
    }
}
