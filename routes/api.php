<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\TaskController;


// Post Routes API
Route::post('/createPost', [PostController::class, 'CreatePost']);
Route::get('/readPost/{id}', [PostController::class, 'ReadPost']);
Route::get('/allPost', [PostController::class, 'PostAll']);

// User Routes API
Route::post('/createUser', [UserController::class, 'CreateUser']);

// Task Routes API
Route::post('/createTask', [TaskController::class, 'CreateTask']);
Route::post('/updateTask/{id}', [TaskController::class, 'UpdateTask']);
Route::get('/getPendingTasks', [TaskController::class, 'GetPendingTasks']);

