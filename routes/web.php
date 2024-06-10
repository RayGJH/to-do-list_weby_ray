<?php

use App\Models\Task;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\taskController;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    $tasks = Task::all();
    return view('home', ['tasks' => $tasks]);
});

Route::post('/register', [UserController::class, 'register']);
Route::post('/logout', [UserController::class,'logout']);
Route::post('/login', [UserController::class,'login']);


Route::get('/show', [taskController::class, 'index']);
Route::post('/addtask',[taskController::class, 'addTask']);
Route::get('/edittask/{task}',[taskController::class, 'editTask']);
Route::put('/edittask/{task}',[taskController::class, 'updateTask']);
Route::delete('/deletetask/{task}',[taskController::class, 'deleteTask']);