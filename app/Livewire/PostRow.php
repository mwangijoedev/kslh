<?php

namespace App\Livewire;

use Livewire\Component;

class PostRow extends Component
{
    public $post;
    public function mount($post){
        $this->post = $post;
    }

   // PostRow.php
    public function archive()
    {
        $this->post->archive();
    }

    public function render()
    {
        return view('livewire.post-row');
    }
}
