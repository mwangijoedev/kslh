<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Hotel;

#[Title('KSLH Hotels')]
class AllHotelsComponent extends Component
{
    public function render()
    {
        return view('livewire.all-hotels-component',[
            'hotels'=>Hotel::all(),
        ]);
    }
}
