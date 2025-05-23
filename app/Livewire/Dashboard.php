<?php

namespace App\Livewire;

use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Room;

#[Title('dashboard')]
class Dashboard extends Component
{
    public function render()
    {
        return view('livewire.dashboard',[
            'user'=>Auth::user(),
            'rooms'=>Room::all(),
        ]);
    }
}
