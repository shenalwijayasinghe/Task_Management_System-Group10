<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Usertask;

class TaskController extends Controller
{
    
    public function index(){
        $usertasks = Usertask::all();
        return view('usertask.index', compact('usertasks'));
    }

    public function create(){
        return view('usertask.create');
    }

    public function store(StoreTaskRequest $request) 
    { 
        Usertask::create($request->validated());
        return redirect('usertask')->with('success', 'Task created successfully'); 
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
        $usertask = Usertask::findOrFail($id); 
        return view('usertask.edit', compact('usertask')); // Corrected to pass the single task
    }

    public function update(Request $request, $id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        $usertask->update($request->all()); 
        return redirect('usertask')->with('success', 'Task updated successfully.'); 
    }

    public function delete($id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        $usertask->delete(); 
        return redirect('usertask')->with('success', 'Task Delete successfully.');
    }
}

