<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Models\Booking;
use Arr;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\File;

class AccommodationController extends Controller
{
    public function create(Request $request, $id){
        $accommodation = Accommodation::findOrFail($id);             
        return view('accommodation.book', ['accommodation'=>$accommodation]);
    }

    public function show($id){
        $accommodation =Accommodation::findOrFail($id);
        return view('accommodations.show',['accommodation'=>$accommodation]);
    }

    public function make(){
        return view('accommodation.make');
    }

    public function store(Request $request){
       
        //Gates
       Gate::define('create', function($user){
        return $user->role_admin == True;
       });

       Gate::authorize('create', Auth::user());

        $attributes = $request->validate([
            "name" => ['required'],
            "price" => ['required'],
            "currency" => ['required'],
            "from" => ['required'],
            "to" => ['required'],
            "description" => ['required'],
            "day1" => ['required'],
        ]);

        Accommodation::create($attributes);

        return redirect('/')->with(['success'=>'Accommodation created successfully']);
    }
}
