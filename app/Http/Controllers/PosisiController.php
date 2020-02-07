<?php

namespace App\Http\Controllers;

use App\Posisi;
use App\User;
use Illuminate\Http\Request;


class PosisiController extends Controller
{
    public function selectPosisi(Request $request){
        $currentUser = auth()->user();
        $position = Posisi::firstOrFail($request['id']);
        return $currentUser->posisi()->toggle($position);
    }



}
