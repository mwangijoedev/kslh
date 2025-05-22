<?php

namespace App\Livewire;

use Illuminate\Database\Eloquent\ModelNotFoundException;
use Livewire\Component;
use Livewire\Attributes\Title;
use App\Models\Restaurant;
use App\Models\Hotel;

#[Title('KSLH Events')]
class RestaurantComponent extends Component
{
    public $restaurant;
    public $next;
    public $operating_hours;
    public $hotel;

   

     public function mount($id){
        $this->restaurant = Restaurant::findOrFail($id);

        //remember to eager lead this with relationships
        $this->hotel = Hotel::where('tag', $this->restaurant->hotel_tag)->first();

         try {
            $this->next = Restaurant::findOrFail($id + 1);
        } catch (ModelNotFoundException $e) {
            $this->next = Restaurant::findOrFail(1);
        }

        $this->operating_hours = explode(',',$this->restaurant->operating_hours);

    }

    public function render()
    {
        return view('livewire.restaurant-component', [
            'restaurant'=>$this->restaurant, 
            'operating_hours'=>$this->operating_hours , 
            'next'=>$this->next,
        ]);
    }
}
