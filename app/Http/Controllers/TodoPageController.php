<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class TodoPageController extends Controller
{
    public function index()
    {
        $tasks = Task::all();

        return view("todo" ,["tasks" => $tasks]);
    }

    public function addTask(Request $request)
    {
        $task = new Task();

        $task->user_id = $request->user_id;

        $task->name = $request->taskname;
        
        $task->description = $request->description;

        $task->status = 0;

        $task->save();

        return redirect()->route("home");
    }

    public function deleteTask(Request $request,$taskId)
    {
        Task::where('id', $taskId)->delete();

        return redirect()->route("home");
    }

    public function completeTask(Request $request ,$id)
    {
        $task = Task::find($request->id);

        if($task->status == 0){
            $task->status = 1;
        }elseif($task->status == 1){
            $task->status = 0;
        }

        $task->save();

        return redirect(route("home"));
    }

    public function editTask(Request $request,$taskId)
    {
        return redirect(route("home"));
    }
}
