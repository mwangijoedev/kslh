<?php

namespace App\Livewire;

use App\Models\Bar;
use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rules\File;
use Illuminate\Support\Facades\Storage;
use Illuminate\Validation\Rule;

#[Title('Create Bar')]
class CreateBar extends Component
{
    use WithFileUploads;

    #[Rule('required|string|max:255')]
    public string $name = '';

    #[Rule('required|string|max:1000')]
    public string $description = '';

    #[Rule('required|image|mimes:jpeg,png,jpg,gif|max:2048')]
    public $image1;

    #[Rule('required|image|mimes:jpeg,png,jpg,gif|max:2048')]
    public $image2;

    #[Rule('required|image|mimes:jpeg,png,jpg,gif|max:2048')]
    public $image3;

    #[Rule('required|string|max:255')]
    public string $service_tag = '';

    #[Rule('nullable|string|max:255')]
    public ?string $operating_hours = null;

    #[Rule('required|exists:hotels,hotel_tag')]
    public string $hotel_tag = '';

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
