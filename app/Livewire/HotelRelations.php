<?php

namespace App\Livewire;

use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Hotel;
use Illuminate\Http\Request;

#[Title('Explore Hotels')]
class HotelRelations extends Component
{

    public function render(Request $request)
    {
        $path = $request->path();
        switch ($path) {
            case 'mombasa-services':
                return view('livewire.hotel-relations',[
                    'hotel'=>Hotel::whereTag('mombasa')->with(['bars','events','halls','restaurants','rooms'])->firstOrFail(),
                ]);
            case 'ngulia-services':
                 return view('livewire.hotel-relations',[
                    'hotel'=>Hotel::whereTag('ngulia')->with(['bars','events','halls','restaurants','rooms'])->firstOrFail(),
                ]);
            case 'voi-services':
                 return view('livewire.hotel-relations',[
                    'hotel'=>Hotel::whereTag('voi')->with(['bars','events','halls','restaurants','rooms'])->firstOrFail(),
                ]);
            default:
                abort(404,"Try Again Later");
        }
    }
}
