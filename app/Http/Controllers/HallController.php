<?php

namespace App\Http\Controllers;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Hall;
use App\Models\Hotel;
use Illuminate\Validation\Rules\File;

class HallController extends Controller
{
     public function create(Request $request){
        return view('hall.create');
    }

    public function show($id){

        $hall =Hall::findOrFail($id);

           try {
            $next = Hall::findOrFail($id + 1);
        } catch (ModelNotFoundException $e) {
            $next = Hall::findOrFail(1);
        }

        $amenities = explode(':', $hall->amenities);
        $package_inclusions = explode(':', $hall->package_inclusions);
        $arrangements = explode(':', $hall->arrangements);

        return view('hall.show',
        [
            'hall'=>$hall, 
            'amenities'=>$amenities , 
            'next'=>$next,
            'package_inclusions'=>$package_inclusions,
            'arrangements'=>$arrangements,
            ]
        );
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'name'=> 'required|string|max:255',
            'description'=> 'required|string',
            'hotel_tag'=> 'required|in:mombasa,voi,ngulia',
            'image1'=> ['required', File::image()->max(1024)],
            'image2'=> ['required', File::image()->max(1024)],
            'image3'=> ['required', File::image()->max(1024)],
            'service_tag'=> 'required|in:accommodation',
            'capacity'=> 'required|string',
            'amenities'=> 'required|string',
            'package_inclusions'=> 'required|string',
            'arrangements_description'=> 'required|string',
            'arrangements'=> 'required|string',
        ]);

        $attributes['image1'] = $request->file('image')->store('hall-photos', 'public');
        $attributes['image2'] = $request->file('image')->store('hall-photos', 'public');
        $attributes['image3'] = $request->file('image')->store('hall-photos', 'public');
        $attributes['hotel_id'] = Hotel::where('tag', $attributes['hotel_tag'])->first()->id;
        
        Hall::create($attributes);

        return redirect('/dashboard')->with(['success'=>'Hall created successfully']);
    }
}
