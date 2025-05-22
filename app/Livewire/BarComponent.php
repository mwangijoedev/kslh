<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Attributes\Title;
use Livewire\Component;
use App\Models\Bar;
use App\Models\Hotel;

#[Title('KSLH Bars')]
class BarComponent extends Component
{
    public $bar;
    public $next;
    public $operating_hours;
    public $hotel;

    public function mount($id){

        $this->bar = Bar::findOrFail($id);

        $this->hotel = Hotel::where('tag', $this->bar->hotel_tag)->first();

         try {
            $this->next = Bar::findOrFail($id + 1);
        } catch (ModelNotFoundException $e) {
            $this->next = Bar::findOrFail(1);
        }

         $this->operating_hours = explode(',',$this->bar->operating_hours);
    }
    public function render()
    {
        return view('livewire.bar-component',[
            'bar'=>$this->bar,
            'next'=>$this->next, 
            'operating_hours'=>$this->operating_hours,
            'hotel'=>$this->hotel,
        ]);
    }
}
