<?php

namespace App\Http\Controllers;

use App\Models\Room;
use App\Models\Booking;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;
use App\Models\Hotel;

class RoomController extends Controller
{
    public function create(Request $request){
        return view('room.create');
    }

    public function show($id){
        $room =Room::findOrFail($id);

        $amenities = $room->highlight= explode(',', $room->amenities);

        return view('room.show',['room'=>$room, 'amenities'=>$amenities]);
    }

    public function store(Request $request){
        $attributes = $request->validate([
        'name'=> 'required|string|max:255',
        'description'=> 'required|string',
        'service_tag'=> 'required|in:accommodation',
        'category'=> 'required|in:standard,executive',
        'image'=> ['nullable', File::image()->max(1024)],
        'capacity'=> 'required|integer|min:1|max:10',
        'amenities'=> 'required|string',
        'hotel_tag'=> 'required|in:mombasa,voi,ngulia',
        'executive_type'=> 'nullable|in:Deluxe Single,Deluxe Double,Deluxe Family',
        ]);
        $attributes['hotel_id'] = Hotel::where('tag', $attributes['hotel_tag'])->first()->id;
        Room::create($attributes);

        return redirect('/dashboard')->with(['success'=>'Room created successfully']);
    }
}
