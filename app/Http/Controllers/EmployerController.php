<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Employer;

class EmployerController extends Controller
{
    public function show( Employer $employer){
    
        $employers = Employer::all();
        
        return view('employer.show',['employers'=>$employers]);
    }
}
