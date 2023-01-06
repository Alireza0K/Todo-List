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

        $task->save();

        return redirect()->route("home");
    }
}
