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
            'tag'=>'required|unique:hotels,tag',
            'highlights'=>'required',
            'image1' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'image2' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'location'=>'required',
        ]);
     

        $attributes['image1'] = $request->file('image1')->store('hotel-photos', 'public');
        $attributes['image2'] = $request->file('image1')->store('hotel-photos', 'public');

        Hotel::create($attributes);

        return redirect('dashboard')->with('success', 'Hotel created successfully.');
    }
    
    public function edit($id){
        $hotel = Hotel::findOrFail($id);
        return view('hotel.edit',['hotel'=>$hotel]);
    }
}
