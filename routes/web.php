<?php

use Faker\Guesser\Name;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get("/TodoList", [\App\Http\Controllers\TodoPageController::class , "index"])->name("home");

Route::post("/TodoList", [\App\Http\Controllers\TodoPageController::class , "addTask"]);

Route::delete("/TodoList/{taskId}", [\App\Http\Controllers\TodoPageController::class , "deleteTask"])->name("delete");

Route::put('/TodoList/complete/{id}', [\App\Http\Controllers\TodoPageController::class , "completeTask"])->name("complete");

Route::get('TodoList/{taskId}/edit', [\App\Http\Controllers\TodoPageController::class, "editTask"])->name("edit");