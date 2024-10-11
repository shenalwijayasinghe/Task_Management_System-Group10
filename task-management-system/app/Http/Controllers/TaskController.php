<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Usertask;

class TaskController extends Controller
{
    public function store(StoreTaskRequest $request) 
    { 
        Usertask::create($request->validated()); 
    } 
 
    public function all() 
    { 
        return Usertask::all(); 
    } 
 
    public function get($id) 
    { 
        return Usertask::findOrFail($id); 
    } 
 
    public function edit($id) 
    { 
        return Usertask::findOrFail($id); 
    } 
 
    public function update(Request $request, $id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        return $usertask->update($request->all()); 
    } 
 
    public function delete($id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        return $usertask->delete(); 
    } 
}
