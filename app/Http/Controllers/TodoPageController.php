<?php

namespace App\Http\Controllers;

use App\Models\Mod;
use App\Models\Task;
use Illuminate\Http\Request;

class TodoPageController extends Controller
{
    public function index()
    {
        $tasks = Task::all();
        $mods = Mod::all();

        return view("todo" ,["tasks" => $tasks, "mods" => $mods]);
    }

    public function addTask(Request $request)
    {
        Task::create($request->all());

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

    public function addMod(Request $request)
    {
        $mod = new Mod();

        $mod->user_id = $request->user_id;

        $mod->name = $request->modeName;

        $mod->save();

        return redirect()->route("home");
    }

    public function deleteMod(Request $request, $modId)
    {
        Mod::where('id', $modId)->delete();

        return redirect()->route("home");
    }
}
