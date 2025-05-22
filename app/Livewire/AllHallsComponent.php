<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Hall;

#[Title('KSLH Halls')]
class AllHallsComponent extends Component
{
    public function render()
    {
        return view('livewire.all-halls-component',[
            'halls' => Hall::all(),
        ]);
    }
}
