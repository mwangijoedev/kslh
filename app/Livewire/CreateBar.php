<?php

namespace App\Livewire;

use App\Models\Bar;
use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

#[Title('Create Bar')]
class CreateBar extends Component{
    use WithFileUploads;

    public string $name = '';
    public string $description = '';
    public $image1;
    public $image2;
    public $image3;
    public string $service_tag = '';
    public ?string $operating_hours = null;
    public string $hotel_tag = '';
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'service_tag' => 'required|string|max:255',
            'operating_hours' => 'nullable|string|max:255',
            'hotel_tag' => 'required|exists:hotels,hotel_tag',
        ];
    }
    public function updated($propertyName)//For Live Validation
    {
        $this->validateOnly($propertyName);
    }
    public function save()
    {
        $validated = $this->validate();

        $validated['image1'] = $this->image1->store('bar-photos', 'public');
        $validated['image2'] = $this->image2->store('bar-photos', 'public');
        $validated['image3'] = $this->image3->store('bar-photos', 'public');
        $validated['hotel_id'] = Hotel::where('hotel_tag', $this->hotel_tag)->first()->id;

        Bar::create($validated);

        session()->flash('success', 'Bar created successfully.');

        return redirect()->route('dashboard'); // enable wire:navigate compatibility
    }
    public function render()
    {
        return view('livewire.create-bar');
    }
}
