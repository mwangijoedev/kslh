<?php

namespace App\Http\Controllers;


use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use Illuminate\Validation\ValidationException;

class SessionController extends Controller
{
 
    public function create()
    {
        return view('auth.login');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $userAttributes=$request->validate([
            'email'=>['email', 'required'],
            'password'=>['required', Password::min(6)]
        ]);

        if(! Auth::attempt($userAttributes)){
            throw ValidationException::withMessages([
                'email'=>'Sorry! Those credentials do not match'
            ]);          
        }

        request()->session()->regenerate();

        return redirect('/');
    }

    
    public function destroy()
    {
        Auth::logout();
        return redirect('/');
    }
}
