<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Posisi;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    function getAllPositions(){
        return Posisi::all();
    }

    function getUserPositions(){
        $user = auth()->user();
        $positions = $user->posisi()->get();
        return response($positions);
    }

    public function selectPosition(Request $request){
        $currentUser = auth()->user();
        $position = Posisi::findOrFail($request['id']);
        return \response()->json($currentUser->posisi()->toggle($position));
    }
}
