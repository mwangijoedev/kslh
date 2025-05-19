<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Hotel;

class HotelController extends Controller
{
    public function index(){
        //show all hotels
        return view('hotel.index');
    }
    public function show($tag){
        $hotel = Hotel::where('tag', $tag)->firstOrFail();

        $highlights = $hotel->highlight= explode(',', $hotel->highlights);

        return view('hotel.show',['hotel'=>$hotel, 'higlights'=> $highlights]);
    }
    public function create(){
        return view('hotel.create');
    }

    public function store(Request $request){    
        $attributes = $request->validate([
            'name'=>'required',
            'description'=>'required',
            'highlights'=>'required',
            'location'=>'required',
        ]);
        $image = $request->validate([
        'image' => 'required|image|mimes:jpg,png,jpeg|max:2048',
        ]);

        $image = $request->file('image')->store('hotel-photos', 'public');

        Hotel::create($attributes + ['image' => $image,]);

        return redirect('dashboard')->with('success', 'Hotel created successfully.');
    }
    
    public function edit($id){
        $hotel = Hotel::findOrFail($id);
        return view('hotel.edit',['hotel'=>$hotel]);
    }
}
