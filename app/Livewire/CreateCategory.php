<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Category;


class CreateCategory extends Component
{
    public $name;
    public $showModal = false;

    protected $rules = [
        'name' => 'required|min:3|unique:categories,name',
    ];

    public function create()
    {
        $this->validate();

        Category::create([
            'name' => $this->name,
        ]);

        $this->reset(['name', 'showModal']);
        session()->flash('message', 'Category added successfully!');
    }

    public function render()
    {
        return view('livewire.create-category');
    }
}
