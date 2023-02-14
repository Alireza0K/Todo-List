<?php

namespace App\Http\Controllers;

use App\Models\Task;
use Illuminate\Http\Request;

class UpdateTaskController extends Controller
{
    public function editTask(Request $request,Task $taskId)
    {
        $taskInfo = $taskId;
        return view("task.updateTask", compact("taskInfo"));
    }

    public function update(Request $request,Task $taskId)
    {
        $taskId->update($request->all());

        return redirect()->route("home");
    }
}
