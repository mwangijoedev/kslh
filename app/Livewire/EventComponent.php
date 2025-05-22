<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Event;
use App\Models\Hotel;

#[Title('KSLH Events')]
class EventComponent extends Component
{
    public $event;
    public $next;
    public $operating_hours;
    public $hotel;

    public $varieties;

    public $categories;

    public function mount($id){
        $this->event = Event::findOrFail($id);

            //remember to eager lead this with relationships
        $this->hotel = Hotel::where('tag', $this->event->hotel_tag)->first();

        try {
            $this->next = Event::findOrFail($id + 1);
        } catch (ModelNotFoundException $e) {
            $this->next = Event::findOrFail(1);
        }

        $this->varieties = explode(':', $this->event->varieties);
        $this->categories = explode(',', $this->event->categories);

    }
    public function render()
    {
        return view('livewire.event-component',[
            'event'=>$this->event,
            'next'=>$this->next,
            'varieties'=>$this->varieties,
            'categories'=>$this->categories,
            'hotel'=>$this->hotel,
        ]);
    }
}
