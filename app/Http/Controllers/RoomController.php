<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use App\Models\Hotel;
use Illuminate\Database\Eloquent\ModelNotFoundException;

class RoomController extends Controller
{
    public function create(Request $request){
        return view('room.create');
    }

    public function show($id){

        $room =Room::findOrFail($id);
        try {
            $next = Room::findOrFail($id + 1);
        } catch (ModelNotFoundException $e) {
            $next = Room::findOrFail(1);
        }

        $amenities = explode(':', $room->amenities);
        $quick_amenities = explode(',', $room->quick_amenities);

        return view('room.show',['room'=>$room, 'amenities'=>$amenities, 'quick_amenities'=>$quick_amenities, 'next'=>$next]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
            'name'=> 'required|string|max:255',
            'description'=> 'required|string',
            'service_tag'=> 'required|in:accommodation',
            'category'=> 'required|in:standard,executive',
            'image1'=> ['required', File::image()->max(1024)],
            'image2'=> ['required', File::image()->max(1024)],
            'image3'=> ['required', File::image()->max(1024)],
            'capacity'=> 'required|integer|min:1|max:10',
            'amenities'=> 'required|string',
            'quick_amenities'=> 'required|string',
            'hotel_tag'=> 'required|in:mombasa,voi,ngulia',
            'executive_type'=> 'nullable|in:Deluxe Single,Deluxe Double,Deluxe Family',
        ]);

        $attributes['image1'] = $request->file('image')->store('room-photos', 'public');
        $attributes['image2'] = $request->file('image')->store('room-photos', 'public');
        $attributes['image3'] = $request->file('image')->store('room-photos', 'public');
      

        $attributes['hotel_id'] = Hotel::where('tag', $attributes['hotel_tag'])->first()->id;
        Room::create($attributes);

        return redirect('/dashboard')->with(['success'=>'Room created successfully']);
    }
}
