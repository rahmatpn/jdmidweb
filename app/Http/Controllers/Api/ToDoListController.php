<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\ToDoList;
use App\User;
use Illuminate\Http\Response;

class ToDoListController extends Controller
{
    function checkTodolist($todo){
        $jobs = User::with('mengerjakan')->find(auth()->id())->mengerjakan->pluck('id')->toArray();
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
}
