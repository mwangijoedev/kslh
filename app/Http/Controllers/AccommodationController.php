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

    public function store(Request $request){
       Gate::authorize('create', Auth::user());

        $attributes = $request->validate([
        'description'=> 'required|string',
        'category-tag'=> 'required|in:standard,executive',
        'hotel-id'=> 'required|exists:hotels,id',
        'hotel-tag'=> 'required|in:mombasa,voi,ngulia',
        'executive-tag'=> 'nullable|in:Deluxe Single,Deluxe Double,Deluxe Family',
        'amenities'=> 'required|string',
        ]);

        Accommodation::create($attributes);

        return redirect('/dashboard')->with(['success'=>'Accommodation created successfully']);
    }
}
