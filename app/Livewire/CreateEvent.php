<?php
namespace App\Livewire;

use App\Models\Event;
use App\Models\Hotel;
use Livewire\Attributes\Title;
use Livewire\Component;
use Livewire\WithFileUploads;
use Illuminate\Validation\Rule;

#[Title('Create Event')]
class CreateEvent extends Component{
    use WithFileUploads;
    public string $name = '';
    public string $description = '';
    public $image1;
    public $image2;
    public $image3;
    public string $varieties = '';
    public string $service_tag = '';
    public string $categories = '';
    public string $hotel_tag = '';
    public function rules(): array
    {
        return [
            'name' => 'required|string|max:255',
            'description' => 'required|string|max:1000',
            'image1' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image2' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'image3' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            'varieties' => 'required|max:1000',
            'service_tag' => 'required|string|max:255',
            'categories' => 'required|max:1000',
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

        $validated['image1'] = $this->image1->store('event-photos', 'public');
        $validated['image2'] = $this->image2->store('event-photos', 'public');
        $validated['image3'] = $this->image3->store('event-photos', 'public');
        $validated['hotel_id'] = Hotel::where('hotel_tag', $this->hotel_tag)->first()->id;

        Event::create($validated);

        session()->flash('success', 'Event created successfully.');

        return redirect()->route('dashboard'); // enable wire:navigate compatibility
    }
      public function render()
    {
        return view('livewire.create-event');
    }
}
