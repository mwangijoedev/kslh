<?php
namespace App\Livewire;

use App\Models\Hall;
use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;

#[Title('Create Hall')]
class CreateHall extends Component{
    use WithFileUploads;
    public string $name = '';
    public string $description = '';
    public $image1;
    public $image2;
    public $image3;
    public string $service_tag = '';
    public string $capacity = '';
    public string $amenities = '';
    public string $package_inclusions = '';
    public string $arrangements_description = '';
    public string $arrangements = '';
    public string $hotel_tag = '';
    public function rules(): array
    {
        return [
            'name'=> 'required|string|max:255',
            'description'=> 'required|string',
            'hotel_tag'=> 'required|in:mombasa,voi,ngulia',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_tag'=> 'required|in:accommodation',
            'capacity'=> 'required|string',
            'amenities'=> 'required|string',
            'package_inclusions'=> 'required|string',
            'arrangements_description'=> 'required|string',
            'arrangements'=> 'required|string',
        ];
    }


    public function updated($propertyName)//For Live Validation
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();

        $validated['image1'] = $this->image1->store('hall-photos', 'public');
        $validated['image2'] = $this->image2->store('hall-photos', 'public');
        $validated['image3'] = $this->image3->store('hall-photos', 'public');
        $validated['hotel_id'] = Hotel::where('hotel_tag', $this->hotel_tag)->first()->id;

        Hall::create($validated);

        session()->flash('success', 'Bar created successfully.');

        return redirect()->route('dashboard'); // enable wire:navigate compatibility
    }

    public function render()
    {
        return view('livewire.create-hall');
    }
}
