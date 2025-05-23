<?php

namespace App\Livewire;

use Livewire\Component;

class DisplayService extends Component
{
    public $service;
    
    public function render()
    {
        return view('livewire.display-service');
    }
}
