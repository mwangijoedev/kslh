<div>
   <form wire:submit="add">
        <input wire:model="todo" type="text" name="todo" class="border-x-2 border-gray-300 px-3 py-2 w-1/2 bg-gray-600 rounded-full">
        <button type="button" class="cursor-pointer">Add</button>
   </form>
   <ol>
        @foreach ($todos as $todo)
            <li>{{ $todo }}</li>
        @endforeach
     <table>
           @foreach ($posts as $post)
           <livewire:post-row :key="$post->id" :post="$post" />
        @endforeach
     </table>
       
   </ol>
</div>
