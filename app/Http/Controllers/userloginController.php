<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class userloginController extends Controller
{
    public function create(Request $request){

        dd($request->all());
        // Auth::login($user, false);
    }
}
