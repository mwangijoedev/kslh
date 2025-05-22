<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Room;

#[Title('KSLH Rooms')]
class AllRoomsComponent extends Component
{
    public function render()
    {
        return view('livewire.all-rooms-component', [
             'rooms'=>Room::all(),
        ]);
    }
}
