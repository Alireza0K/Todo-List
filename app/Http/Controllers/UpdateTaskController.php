<?php

namespace App\Http\Controllers;

use App\Http\Requests\UpdateTaskRequest;
use App\Models\Task;
use App\Models\Mod;
use Illuminate\Http\Request;

class UpdateTaskController extends Controller
{
    public function editTask(Request $request,Task $taskId)
    {
        $taskInfo = $taskId;

        $mods = Mod::all();

        return view("task.updateTask", compact("taskInfo", "mods"));
    }

    public function update(UpdateTaskRequest $request,Task $taskId)
    {
        $taskId->update($request->all());

        return redirect()->route("home");
    }
}
