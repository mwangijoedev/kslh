<?php
namespace App\Livewire;

use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

#[Title('Create Hotel')]
class CreateHotel extends Component{
    use WithFileUploads;
    public string $name = '';
    public string $description = '';
    public $tag;
    public string $highlights = '';
    public $image1;
    public $image2;
    public string $location = '';
    public function rules(): array
    {
        return [
            'name'=>'required',
            'description'=>'required',
            'tag'=>'required|unique:hotels,tag',
            'highlights'=>'required',
            'image1' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'image2' => 'required|image|mimes:jpg,png,jpeg|max:2048',
            'location'=>'required',
        ];
    }

    public function updated($propertyName)//For Live Validation
    {
        $this->validateOnly($propertyName);
    }

    public function save()
    {
        $validated = $this->validate();

        $validated['image1'] = $this->image1->store('hotel-photos', 'public');
        $validated['image2'] = $this->image2->store('hotel-photos', 'public');

        Hotel::create($validated);

        session()->flash('success', 'Hotel created successfully.');

        return redirect()->route('dashboard'); // enable wire:navigate compatibility
    }

      public function render()
    {
        return view('livewire.create-hotel');
    }
}
