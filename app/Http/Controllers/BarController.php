<?php

namespace App\Http\Controllers;

use App\Models\Bar;
use Illuminate\Http\Request;
use App\Models\Hotel;

class BarController extends Controller
{
    public function create()
    {
        return view('bar.create');
    }

    public function store(Request $request)
    {
        $attributes = $request->validate([
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_tag' => 'required|string|max:255',
            'hotel_tag' => 'required|exists:hotels,hotel_tag',
        ]);

        $attributes['image'] = $request->file('image')->store('bar-photos', 'public');
        $attributes['hotel_id'] = Hotel::where('hotel_tag', $attributes['hotel_tag'])->first()->id;

        Bar::create($attributes);

        return redirect()->route('bar.index')->with('success', 'Bar created successfully.');
    }

}
