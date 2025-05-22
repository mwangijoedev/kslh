<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Event;

#[Title('KSLH Bars')]
class AllEventsComponent extends Component
{
    public function render()
    {
        return view('livewire.all-events-component',[
            'events'=>Event::all(),
        ]);
    }
}
