<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Usertask;

class TaskController extends Controller

{ 

       
    public function delete($id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        return $usertask->delete(); 
    } 
    //Delete



    //Update
    public function update(Request $request, $id) 
    { 
        $usertask = Usertask::findOrFail($id); 
        return $usertask->update($request->all()); 
    }

  


    //create
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
        return Usertask::findorFail($id);
    }


    //edit
    public function edit($id)
    {
        $usertask = Usertask::findOrFail($id); 
        return view('usertask.edit', compact('usertask')); 
    }

    

    
    public function index(){
        $usertasks=Usertask::all();
        return view('usertask.index',compact('usertasks'));
    }


}
