<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Hall;
use App\Models\Hotel;

#[Title('KSLH Halls')]
class HallComponent extends Component
{

    public $hall;
    public $next;
    public $package_inclusions;
    public $arrangements;
    public $amenities;
    public $hotel;
    public function mount($id){

        $this->hall =Hall::findOrFail($id);

        //remember to eager lead this with relationships
        $this->hotel = Hotel::where('tag', $this->hall->hotel_tag)->first();

           try {
            $this->next = Hall::findOrFail($id + 1);
        } catch (ModelNotFoundException $e) {
            $this->next = Hall::findOrFail(1);
        }

        $this->amenities = explode(':', $this->hall->amenities);
        $this->package_inclusions = explode(':', $this->hall->package_inclusions);
        $this->arrangements = explode(':', $this->hall->arrangements);
    }
    public function render()
    {
        return view('livewire.hall-component',[
            'hall'=>$this->hall, 
            'amenities'=>$this->amenities , 
            'next'=>$this->next,
            'hotel'=>$this->hotel,
            'package_inclusions'=>$this->package_inclusions,
            'arrangements'=>$this->arrangements,
            ]
        );
    }
}
