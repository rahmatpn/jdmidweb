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
        $date = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString();
        $time = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toTimeString();
        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where('status', '1')
                ->where(function ($q) use($date, $time){
                    $q->where('tanggal_mulai','>',$date)
                        ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time);
                })
                ->orderBy('tanggal_mulai')
                ->paginate(5)]);
    }

    function getJobs($query){
        $hotel_id = ProfileHotel::where('nama','like','%'.$query.'%')
                ->pluck('hotel_id')
                ->toArray();

        $date = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString();
        $time = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toTimeString();

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where('status', '1')
                ->where(function ($q) use($date, $time){
                    $q->where('tanggal_mulai','>',$date)
                        ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time);
                })
                ->where(function ($q) use ($query){
                    $q->where('deskripsi','like','%'.$query.'%')
                        ->orWhere('area','like','%'.$query.'%')
                        ->orWhere('hotel_id', !empty($hotel_id) ? $hotel_id : "!@!@!@!");
                })
                ->orderBy('tanggal_mulai')
                ->paginate(5)]);
    }

    function getJobsWithPosition($position){
        $date = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString();
        $time = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toTimeString();

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->where('status', '1')
                ->where('posisi_id',$position)
                ->where(function ($q) use($date, $time){
                    $q->where('tanggal_mulai','>',$date)
                        ->orWhere('tanggal_mulai',$date)->where('waktu_mulai','>',$time);
                })
                ->orderBy('tanggal_mulai')
                ->paginate(5)]);
    }

    function applyJob($job){
        $user = Auth::user();
        $profile = $user->profile;
        $currentJob = Pekerjaan::whereHas('dikerjakan', function ($q) use ($user){
            $q->where('pekerjaan_user.user_id', '=', $user->id);
        })->with('dikerjakan')->find($job);
        if ($currentJob == null){
            $currentJob = Pekerjaan::with('dikerjakan')->find($job);
        }

        $currentJob->tinggi_minimal = $currentJob->tinggi_minimal == null ? PHP_INT_MIN : $currentJob->tinggi_minimal;
        $currentJob->tinggi_maksimal = $currentJob->tinggi_maksimal == null ? PHP_INT_MAX : $currentJob->tinggi_maksimal;
        $currentJob->berat_minimal = $currentJob->berat_minimal == null ? PHP_INT_MIN : $currentJob->berat_minimal;
        $currentJob->berat_maksimal = $currentJob->berat_maksimal == null ? PHP_INT_MAX : $currentJob->berat_maksimal;

        if($currentJob->diterima->count() >= $currentJob->kuota)
            return response()->json(['message'=>'Kuota sudah penuh'],Response::HTTP_FORBIDDEN);

        elseif ($currentJob->isExpired || $currentJob->status != '1')
            return response()->json(['message'=>'Job sudah expired'], Response::HTTP_FORBIDDEN);
        elseif (!$profile->isCompleted)
            return response()->json(['message'=>'Silakan melengkapi profil'], Response::HTTP_FORBIDDEN);
        elseif ($currentJob->tinggi_minimal > $profile->tinggi_badan || $currentJob->tinggi_maksimal < $profile->tinggi_badan)
            return response()->json(['message'=>'Tinggi tidak memenuhi'],Response::HTTP_FORBIDDEN);
        elseif ($currentJob->berat_minimal > $profile->berat_badan || $currentJob->berat_maksimal < $profile->berat_badan)
            return response()->json(['message'=>'Berat tidak memenuhi'],Response::HTTP_FORBIDDEN);
        elseif (!empty($currentJob->dikerjakan->first())){
            if ($currentJob->dikerjakan->first()->pivot->status != '0')
                return response()->json(['message'=>'Hubungi pihak hotel untuk membatalkan pekerjaan'], Response::HTTP_FORBIDDEN);
            else
                return response()->json($user->mengerjakan()->toggle(Pekerjaan::findOrFail($job)));
        }
        else
            return response()->json($user->mengerjakan()->toggle(Pekerjaan::findOrFail($job)));
    }

    function getUserAppliedJob($id){
        if ($id != auth()->id())
            return \response(Response::HTTP_UNAUTHORIZED);

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->whereHas('dikerjakan', function ($q) use ($id){
                    $q->where('pekerjaan_user.status', 1)->where('user_id', $id);
                })
                ->orderBy('tanggal_mulai')
                ->paginate(5)]);
    }

    function getUserAcceptedJob($id){
        if ($id != auth()->id())
            return \response(Response::HTTP_UNAUTHORIZED);

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->withCount('dikerjakan')
                ->whereHas('dikerjakan', function ($q) use ($id){
                    $q->where('pekerjaan_user.status', 2)->where('user_id', $id);
                })
                ->orderBy('tanggal_mulai')
                ->paginate(5)]);
    }

    function getUserJobHistory($id){
        if ($id != auth()->id())
            return \response(Response::HTTP_UNAUTHORIZED);

        return response()->json(['jobs'=>
            Pekerjaan::with('hotel.profile')
                ->with('posisi')
                ->with(['dikerjakan' => function ($q) use ($id){
                    $q->where('user_id', $id);
                }])
                ->withCount('dikerjakan')
                ->whereHas('dikerjakan', function ($q) use ($id){
                    $q->where('pekerjaan_user.status', '>', 2)->where('user_id', $id);
                })
                ->orderBy('tanggal_mulai', 'desc')
                ->paginate(5)]);
    }

    function getActiveJobs($id){
        $date = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toDateString();
        $time = Carbon::now()->setTimezone('Asia/Phnom_Penh')->toTimeString();
        if ($id != auth()->id())
            return \response(Response::HTTP_UNAUTHORIZED);
        $jobs = Pekerjaan::whereHas('dikerjakan', function ($q) use ($id){
            $q->where('user_id', $id)
                ->where('pekerjaan_user.status', 2);
            })
            ->with('hotel.profile')
            ->with('posisi')
            ->with('todolist')
            ->where('tanggal_mulai', $date)
            ->where('waktu_mulai', '<', $time)
            ->where('waktu_selesai', '>', $time)
            ->first();
        return \response()->json(['active_jobs'=>$jobs]);
    }

    function jobDone($id) { //id = jobId
        $job = Pekerjaan::find($id);
        if ($job->dikerjakan->first()->pivot->status == 1) {
            if (\auth()->user()->todolist->count() == $job->todolist->count()) {
                $job->dikerjakan()->updateExistingPivot(\auth()->id(), ['status' => '2']);
                return \response()->json(['message' => 'success']);
            } else {
                return \response()->json(['message' => 'not success'], Response::HTTP_FORBIDDEN);
            }
        } else {
            return \response()->json(['message' => 'not success'], Response::HTTP_FORBIDDEN);
        }
    }
}
