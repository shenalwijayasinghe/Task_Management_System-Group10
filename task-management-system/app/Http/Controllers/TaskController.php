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
  
}
