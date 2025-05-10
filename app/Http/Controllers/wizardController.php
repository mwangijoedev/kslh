<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class wizardController extends Controller
{
   public function create(Request $request){
        if($request->step == 1){
            return view('wizard.personalDetails_form');
        }
        else if($request->step == 2){
            return view('wizard.bookingPreferences');
        }
       
   }

   //validate the form data
   private function validate(Request $request){
      $request->validate([
         'name' => 'required|string|max:255',
         'email' => 'required|email|max:255',
         'phone' => 'required|string|max:15',
         'location' => 'required|string|max:255',
         'accommodation_type' => 'required|string|max:255',
         'check_in_date' => 'required|date',
         'check_out_date' => 'required|date|after_or_equal:check_in_date',
      ]);

   }
   //check what step the user is on
}
