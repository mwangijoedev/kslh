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

     public function show($id){
        $restaurant = Restaurant::findOrFail($id);
        return view('restaurant.show',['restaurant'=>$restaurant]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'name'=> 'required|string|max:255',
            'location'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'service_tag'=> 'required|in:dining',
            'hotel_tag'=> 'required|exists:hotels,tag',
            'capacity'=> 'required|integer|min:1',
            'image1'=> ['required', File::image()->max(1024)],
            'image2'=> ['required', File::image()->max(1024)],
            'image3'=> ['required', File::image()->max(1024)],
            'operating_hours'=> 'required|string|max:255',
        ]);

        $attributes['image1'] = $request->file('image')->store('restaurant-photos', 'public');
        $attributes['image2'] = $request->file('image')->store('restaurant-photos', 'public');
        $attributes['image3'] = $request->file('image')->store('restaurant-photos', 'public');
        $attributes['hotel_id'] = Hotel::where('tag', $attributes['hotel_tag'])->first()->id;
    
        Restaurant::create($attributes);

        return redirect('/dashboard')->with(['success'=>'Restaurant created successfully']);
    }
}
