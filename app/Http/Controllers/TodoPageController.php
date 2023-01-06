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
}
