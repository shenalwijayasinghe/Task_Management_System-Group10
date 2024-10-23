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

    
}

