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

  
}
