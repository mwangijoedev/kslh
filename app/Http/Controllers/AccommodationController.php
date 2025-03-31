<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Models\Booking;
use Arr;
use Auth;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
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

        dd(Auth::user()->id);

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
            'currency'=>['required'],
            'description'=>['required'],
            // 'primary_photo'=>['required','file'],
            // 'secondary_photo'=>['required','file'],
            // 'secondary_photo2'=>['required','file'],
            'from'=>['required'],
            'to'=>['required'],
        ]);

        
        // $primaryphoto = $request->file('primary-photo')->store('public/resources/images');
        // $secondaryphoto = $request->file('secondary-photo')->store('public/resources/images'); 
        // $secondaryphoto2 = $request->file('secondary-photo2')->store('public/resources/images');

        

        Accommodation::create([
            'user_id'=>Auth::user(),
            // 'primary_photo'=>$primaryphoto,
            // 'secondary_photo'=>$secondaryphoto,
            // 'secondary_photo2'=>$secondaryphoto2,
            'name'=>$attributes['name'],
            'package_type'=>$attributes['package_type'],
            'highlight1'=>$attributes['highlight1'],
            'highlight2'=>$attributes['highlight2'],
            'highlight3'=>$attributes['highlight3'],
            'highlight4'=>$attributes['highlight4'],
            'day1'=>$attributes['day1'],
            'day2'=>$attributes['day2'],
            'day3'=>$attributes['day3'],
            'package_inclusions'=>$attributes['package_inclusions'],
            'package_exclusions'=>$attributes['package_exclusions'],
            'price'=>$attributes['price'],
            'currency'=>$attributes['currency'],
            'description'=>$attributes['description'],
            'from'=>$attributes['from'],
            'to'=>$attributes['to'],            
        ]);
    
        return redirect('/')->with(['success'=>'Accommodation created successfully']);
    }
}
