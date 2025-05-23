<?php

namespace App\Livewire;

use App\Models\Room;
use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Create Room')]
class CreateRoom extends Component{
    use WithFileUploads;

    public string $name = '';
    public string $description = '';
    public string $service_tag = '';
    public string $category = '';
    public $image1;
    public $image2;
    public $image3;
    public $capacity;
    public $amenities;
    public $quick_amenities;
    public string $hotel_tag = '';
    public ?string $executive_type ='';
    public function rules(): array
    {
        return [
            'name'=> 'required|string|max:255',
            'description'=> 'required|string',
            'service_tag'=> 'required|in:accommodation',
            'category'=> 'required|in:standard,executive',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'capacity'=> 'required|integer|min:1|max:10',
            'amenities'=> 'required|string',
            'quick_amenities'=> 'required|string',
            'hotel_tag'=> 'required|in:mombasa,voi,ngulia',
            'executive_type'=> 'nullable|in:Deluxe Single,Deluxe Double,Deluxe Family',
        ];
    }
    public function updated($propertyName)//For Live Validation
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $validated = $this->validate();

        $validated['image1'] = $this->image1->store('room-photos', 'public');
        $validated['image2'] = $this->image2->store('room-photos', 'public');
        $validated['image3'] = $this->image3->store('room-photos', 'public');
        $validated['hotel_id'] = Hotel::where('hotel_tag', $this->hotel_tag)->first()->id;

        Room::create($validated);

        session()->flash('success', 'Room created successfully.');

        return redirect()->route('dashboard'); // enable wire:navigate compatibility
    }
    public function render()
    {
        return view('livewire.create-room');
    }
}
