<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreTaskRequest;
use App\Models\Usertask;

class TaskController extends Controller
{
    
    public function index(){
        $usertasks=Usertask::all();
        return view('usertask.index',compact('usertasks'));
    }

    public function create(){
        return view('usertask.create');
    }
    public function store(StoreTaskRequest $request) 
    { 
        Usertask::create($request->validated());
        return redirect('usertask')->with('success', 'Task created successfully'); 
    } 
 
     
}
