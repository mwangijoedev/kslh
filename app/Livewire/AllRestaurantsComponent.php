<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Restaurant;

#[Title('KSLH Restaurants')]
class AllRestaurantsComponent extends Component
{
    public function render()
    {
        return view('livewire.all-restaurants-component',[
            'restaurants'=>Restaurant::all(),
        ]);
    }
}
