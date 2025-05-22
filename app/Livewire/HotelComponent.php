<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Hotel;

#[Title('KSLH Hotels')]
class HotelComponent extends Component
{
    public $hotel;
    public $highlights;

    
    public function mount($tag){
         $this->hotel = Hotel::where('tag', $tag)->firstOrFail();

        $this->highlights = explode(',', $this->hotel->highlights);

    }
    public function render()
    {
        return view('livewire.hotel-component',[
            'hotel'=>$this->hotel,
            'higlights'=> $this->highlights,
        ]);
    }
}
