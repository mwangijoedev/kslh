<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use Illuminate\Http\Request;
use App\Models\Hotel;

class BarController extends Controller
{
    public function create()
    {
        return view('bar.create');
    }

    //  public function show($id){

    //     $bar =Bar::findOrFail($id);

    //      try {
    //         $next = Bar::findOrFail($id + 1);
    //     } catch (ModelNotFoundException $e) {
    //         $next = Bar::findOrFail(1);
    //     }

    //      $operating_hours = explode(',',$bar->operating_hours);
    //     return view('bar.show',['bar'=>$bar, 'next'=>$next, 'operating_hours'=>$operating_hours ]);
    // }


    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_tag' => 'required|string|max:255',
            'operating_hours'=> 'nullable|string|max:255',
            'hotel_tag' => 'required|exists:hotels,hotel_tag',
        ]);

        $attributes['image1'] = $request->file('image')->store('bar-photos', 'public');
        $attributes['image2'] = $request->file('image')->store('bar-photos', 'public');
        $attributes['image3'] = $request->file('image')->store('bar-photos', 'public');
        $attributes['hotel_id'] = Hotel::where('hotel_tag', $attributes['hotel_tag'])->first()->id;

        Bar::create($attributes);

        return redirect()->route('/dashboard')->with('success', 'Bar created successfully.');
    }

}
