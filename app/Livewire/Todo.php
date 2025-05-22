<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Post;

class Todo extends Component
{
    public $todos = ['eat', 'dance', 'bake'];

    public $todo = "Make Dinner";

    public function delete(Post $post){
        $post->delete();
    }

    public function add(){
        $this->todos[] = $this->todo;
        $this->reset('todo');
    }
    public function render()
    {
        return view('livewire.todo', [
            'posts'=>Post::all(),
        ]);
    }
}
