<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TaskController;

Route::get('/', function () {
    return view('welcome');
});

Route::post('usertask', [EmployeeController::class, 'store']); 
Route::get('usertask/all', [EmployeeController::class, 'all']); 
Route::get('usertask/{id}/edit', [EmployeeController::class, 'edit']); 
Route::post('usertask/{id}', [EmployeeController::class, 'update']); 
Route::delete('usertask/{id}', [EmployeeController::class, 'delete']); 
