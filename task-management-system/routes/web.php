<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;
use App\Models\Usertask;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('usertask', [TaskController::class, 'index']);
Route::get('usertask/create', [TaskController::class, 'create']);
Route::get('usertask/{id}/edit', [TaskController::class, 'edit']); 

Route::post('usertask/store', [TaskController::class, 'store']); 
Route::get('usertask/all', [TaskController::class, 'all']);
Route::get('usertask/{id}/get', [TaskController::class, 'get']); 


Route::post('usertask/update/{id}', [TaskController::class, 'update']); 
Route::delete('usertask/delete/{id}', [TaskController::class, 'delete']); 
Route::get('/usertask/show', [TaskController::class, 'show']);
