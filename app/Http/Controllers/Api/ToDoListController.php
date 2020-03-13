<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Pekerjaan;
use App\ToDoList;
use App\User;
use Illuminate\Http\Response;

class ToDoListController extends Controller
{
    function checkTodolist($todo){
        $jobs = User::whereHas('mengerjakan', function ($q){
            $q->where('pekerjaan_user.status', '1');
        })->with('mengerjakan')->find(auth()->id())->mengerjakan->pluck('id')->toArray();
        $todo = ToDoList::find($todo);
        if (in_array($todo->pekerjaan_id, $jobs)){
            return response()
                ->json(auth()
                    ->user()
                    ->todolist()
                    ->toggle($todo));
        }
        else
            return response(Response::HTTP_FORBIDDEN);
    }

    function checkedTodolist($id){
        $userid = auth()->id();
        $todolists = ToDoList::whereHas('user', function ($q) use ($userid){
            $q->where('user_id', $userid);
        })
            ->where('pekerjaan_id', $id)
            ->get();
        return response()->json(['todolist'=>$todolists]);
    }

    function getTodolist($id){
        if (!auth()->user()->mengerjakan->where('id', $id)->isEmpty())
            return \response(["todolist"=>ToDoList::where('pekerjaan_id', $id)->get()]);
        else
            return response(Response::HTTP_FORBIDDEN);
    }
}
