<?php

namespace App\Livewire;

use Livewire\Component;
use Livewire\Attributes\Title;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Models\Room;
use App\Models\Hotel;

#[Title('KSLH Rooms')]
class RoomComponent extends Component
{
    public $room;
    public $amenities;
    public $quick_amenities;
    public $hotel;

    public $categories;

    public function mount($id){
        
        $this->room =Room::findOrFail($id);

        //remember to eager lead this with relationships
        $this->hotel = Hotel::where('tag', $this->room->hotel_tag)->first();

        try {
            $this->next = Room::findOrFail($id + 1);
        } catch (ModelNotFoundException $e) {
            $this->next = Room::findOrFail(1);
        }

        $this->amenities = explode(':', $this->room->amenities);
        $this->quick_amenities = explode(',', $this->room->quick_amenities);
    }
    public function render()
    {
        return view('livewire.room-component',[
            'room'=>$this->room,
            'amenities'=>$this->amenities,
            'quick_amenities'=>$this->quick_amenities,
            'next'=>$this->next,
        ]);
    }
}
