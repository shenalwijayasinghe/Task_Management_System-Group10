<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Usertask;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('usertask', [TaskController::class, 'index']);
Route::get('usertask/create', [TaskController::class, 'create']);


Route::post('usertask/store', [TaskController::class, 'store']); 
Route::get('usertask/all', [TaskController::class, 'all']);


Route::get('usertask/{id}/edit', [TaskController::class, 'edit']); 
Route::post('usertask/{id}', [TaskController::class, 'update']); 
Route::delete('usertask/{id}', [TaskController::class, 'delete']); 
