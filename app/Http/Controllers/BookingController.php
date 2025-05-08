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
    public function store(Request $request, $id){
        if(Auth::user() === false){
            return redirect('/login');
        }
        $user = Auth::user();
        $accommodation = Accommodation::find($id);
        $points = $this->points($id);
        $attributes = [
            'user_name'=>$user->name,
            'user_id'=>$user->id,
            'accommodation_name'=>$accommodation->name,
            'accommodation_id'=>$accommodation->id,
            'price'=>$accommodation->price,
            'points_earned'=>$points,
            'status'=>'pending',
        ];
        $existingBooking = Booking::where('user_id', $user->id)
            ->where('package_id', $accommodation->id)
            ->first();
        if ($existingBooking) {
            return redirect('/dashboard')
                ->with('error', 'You have already booked this accommodation.');
        }
        $existingAccommodation = Booking::where('package_id', $accommodation->id)
            ->where('status', '!=', 'cancelled')
            ->first();
        if ($existingAccommodation) {
            return redirect('/dashboard')
                ->with('error', 'This accommodation is already booked.');
        }
        Booking::create($attributes);
        $request->session()->flash('success', 'Booking created successfully.');

        return redirect('/dashboard');      
            
    }
    private function points($id){
        $package = Accommodation::find($id);
        $points = $package->price * 0.1;
        return $points;
    }
}
