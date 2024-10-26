<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Usertask;

class TaskController extends Controller
{


    public function all()
    {
        return Usertask::all();

    

    public function update(Request $request, $id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        return $usertask->update($request->all()); 

    }

    public function get($id)
    {
        return Usertask::findorFail($id);
    }



    public function edit($id)
    {
        $usertask = Usertask::findOrFail($id); 
        return view('usertask.edit', compact('usertask')); 
    }

    

    public function store(StoreTaskRequest $request) 
    { 
        Usertask::create($request->validated());
        return redirect('usertask')->with('success', 'Task created successfully'); 
    } 
 
    public function delete($id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        return $usertask->delete(); 
    } 
    
}

