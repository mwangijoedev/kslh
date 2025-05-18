<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rules\Password;
use App\Models\Room;

class UserController extends Controller
{
    public function show(){
        return view('user.profile', ['user'=>Auth::user()]);
    }

    public function edit(){
        return view('user.edit', ['user'=>Auth::user()]);
    }

    public function update(Request $request, User $user)
    {
       $attributes=$request->validate([
        'name'=>['required'],
        'email'=>['required','email'],
        'password'=>['required','confirmed',Password::min(6)],
       ]);

       Auth::user()->update($attributes);

       return redirect('/profile');
    }

    public function dashboard(){
        $rooms = Room::all();

        return view("dashboard", ['user'=>Auth::user(), 'rooms'=>$rooms]);
    }


}
