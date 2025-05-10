<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Accommodation;
use Livewire\Attributes\Title;
use App\Models\Booking;

class Counter extends Component
{
    public $name;
    public $user_name;

    public function mount($id){
        $this->user_name = Booking::findorfail($id)->user_name;
    }
    public function render()
    {
        return view('livewire.counter')->with([
                    'accommodations'=>Accommodation::all(),
                    'owner'=>$this->user_name,
                    ])
        ->title('Counter');
    }
}
