<?php

namespace App\Http\Controllers;

use App\Models\Accommodation;
use App\Models\Booking;
use Illuminate\Http\Request;
use Auth;
use function Livewire\str;
use function PHPUnit\Framework\throwException;

class BookingController extends Controller
{
    public function store($id){
        if(Auth::user() === false){
            return redirect('/login');
        }

        Booking::create([
            'accommodation_id'=>$id,
            'user_id'=>Auth::user()->id,
        ]);

        //loyalty points awarding system
        //simple version
        $price = Accommodation::find($id)->price;

        $points = $price/100;

        

        dd($points);
      

        // if (is_int($cost) === true && isset($cost)) {
            
        // }else{
        //     throwException()
        // }

        return redirect('/search/accommodation');
    }
}
