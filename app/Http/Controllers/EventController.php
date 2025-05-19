<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Event;
use App\Models\Hotel;

class EventController extends Controller
{
       public function create()
    {
        return view('event.create');
    }

     public function show($id){

        $event = Event::findOrFail($id);

        return view('event.show',['event'=>$event]);
    }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'service_tag' => 'required|string|max:255',
            'type' => 'required|in:function,recreation,entertainment',
            'hotel_tag'=>'required|in:mombasa,voi,ngulia',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $attributes['image1'] = $request->file('image')->store('event-photos', 'public');
        $attributes['image2'] = $request->file('image')->store('event-photos', 'public');
        $attributes['image3'] = $request->file('image')->store('event-photos', 'public');
        $attributes['hotel_id'] = Hotel::where('tag', $attributes['hotel_tag'])->first()->id;

        Event::create($attributes);

        return redirect()->route('/dashboard')->with('success', 'Event created successfully.');
    }

}
