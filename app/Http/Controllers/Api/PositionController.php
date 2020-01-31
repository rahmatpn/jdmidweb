<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Posisi;
use App\User;
use Illuminate\Http\Request;

class PositionController extends Controller
{
    function getAllPositions(){
        return response()->json(["positions"=>Posisi::all()]);
    }

    function getUserPositions($id){
        $user = User::find($id)->first();
        $positions = $user->posisi()->get();
        return response()->json(["positions" => $positions]);
    }

    public function selectPosition(Request $request){
        $currentUser = auth()->user();
        $position = Posisi::findOrFail($request['id']);
        return \response()->json($currentUser->posisi()->toggle($position));
    }
}
