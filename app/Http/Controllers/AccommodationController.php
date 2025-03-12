<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Models\Asset;
use App\Models\Booking;
use Arr;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Validation\Rules\File;

class AccommodationController extends Controller
{
    public function create(Request $request, $id){
        $accommodation = Accommodation::findOrFail($id);             
        return view('accommodation.book', ['accommodation'=>$accommodation]);
    }

    public function show($id){
        $accommodation =Accommodation::findOrFail($id);

        $inclusions = $accommodation->package_inclusions;
        $exclusions = $accommodation->package_exclusions;

       $inclusions = explode(',' ,$inclusions,8);
       $exclusions = explode(',' ,$exclusions,8);

        return view(
            'accommodations.show',
         ['accommodation'=>$accommodation,
                'inclusions'=>$inclusions,
                'exclusions'=>$exclusions
            ]);
    }

    public function make(){
        return view('accommodation.make');
    }

    public function store(Request $request){

        $attributes = $request->validate([
            'name'=>['required'],
            'package_type'=>['required'],
            'highlight1'=>['required'],
            'highlight2'=>['required'],
            'highlight3'=>['required'],
            'highlight4'=>['required'],
            'day1'=>['required'],
            'day2'=>['required'],
            'day3'=>['required'],
            'package_inclusions'=>['required'],
            'package_exclusions'=>['required'],
            'price'=>['required'],
            'available dates'=>['required'],
            'currency'=>['required'],
            'description'=>['required'],
        ]);

        Accommodation::create($attributes);
        
        return redirect()->route('/')->with(['success'=>'Accommodation created successfully']);
    }
}
