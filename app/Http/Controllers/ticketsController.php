<?php

namespace App\Http\Controllers;

use App\Models\tickets;
use Illuminate\Validation\Rules\File;
use Illuminate\Http\Request;

class ticketsController extends Controller
{
    public function create(){
        return view('tickets.create');
    }

    public function store(Request $request){
        $ticketAttributes= $request->validate([
            'name'=>'required',
            'description'=>'required',
            'path'=>['required', File::types(['png','jpeg','jpg'])]
        ]);

        $itempath = $request->path->store('tickets');

        $product = tickets::create(
            [
                'name'=>$ticketAttributes['name'],
                'description'=>$ticketAttributes['description'],                
                'path'=>$itempath
            ]
        ); 

        return redirect('/showtickets');
    }

    public function show(){
        $tickets = tickets::all();

        return view('tickets.show', ['tickets'=>$tickets]);
    }

}
