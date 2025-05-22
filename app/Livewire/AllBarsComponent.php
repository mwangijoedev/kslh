<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Bar;

#[Title('KSLH Bars')]
class AllBarsComponent extends Component
{
    public function render()
    {
        return view('livewire.all-bars-component',[
            'bars'=>Bar::all(),
        ]);
    }
}
