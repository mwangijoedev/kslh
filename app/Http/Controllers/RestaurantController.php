<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Restaurant;
use App\Models\Hotel;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;

class RestaurantController extends Controller
{
    public function create()
    {
        return view('restaurant.create');
    }

    public function store(Request $request){

        $attributes = $request->validate([
            'name'=> 'required|string|max:255',
            'location'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'service_tag'=> 'required|in:dining',
            'hotel_tag'=> 'required|exists:hotels,tag',
            'capacity'=> 'required|integer|min:1',
            'image'=> ['nullable', File::image()->max(1024)],
            'operating_hours'=> 'nullable|string|max:255',
        ]);


        $attributes['hotel_id'] = Hotel::where('tag', $attributes['hotel_tag'])->first()->id;
    
        Restaurant::create($attributes);

        return redirect('/dashboard')->with(['success'=>'Restaurant created successfully']);
    }
}
