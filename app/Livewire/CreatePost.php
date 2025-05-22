<?php

namespace App\Livewire;

use Livewire\Attributes\Rule;
use Livewire\Component;
use App\Models\Post;

class CreatePost extends Component
{

    #[Rule('required', message:'You forgot to add a Title')]
    public $title;

    #[Rule('required', message:'Missed the Content !')]
    public $content;

    public function save(Post $post){
        $this->validate();        

        $post->create([
            'title' => $this->title,
            'content'=> $this->content,
        ]);

        $this->redirect('/todos');
    }
    public function render()
    {
        return view('livewire.create-post');
    }
}
