<?php

namespace App\Livewire;

use App\Models\Restaurant;
use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

#[Title('Create Restaurant')]
class CreateRestaurant extends Component{

    use WithFileUploads;
    public string $name = '';
    public string $location = '';
    public string $description = '';
    public string $service_tag = '';
    public string $hotel_tag = '';
    public string $capacity = '';
    public $image1;
    public $image2;
    public $image3;
    public ?string $operating_hours = null;
    public function rules(): array
    {
        return [
            'name'=> 'required|string|max:255',
            'location'=> 'required|string|max:255',
            'description'=> 'required|string|max:255',
            'service_tag'=> 'required|in:dining',
            'hotel_tag'=> 'required|exists:hotels,tag',
            'capacity'=> 'required|integer|min:1',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'operating_hours'=> 'required|string|max:255',
        ];
    }
    public function updated($propertyName)//For Live Validation
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $validated = $this->validate();

        $validated['image1'] = $this->image1->store('restaurant-photos', 'public');
        $validated['image2'] = $this->image2->store('restaurant-photos', 'public');
        $validated['image3'] = $this->image3->store('restaurant-photos', 'public');
        $validated['hotel_id'] = Hotel::where('hotel_tag', $this->hotel_tag)->first()->id;

        Restaurant::create($validated);

        session()->flash('success', 'Restaurant created successfully.');

        return redirect()->route('dashboard'); // enable wire:navigate compatibility
    }
    public function render()
    {
        return view('livewire.create-restaurant');
    }
}
