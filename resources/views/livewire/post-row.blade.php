<tr @class(['bg-lime-400'=>$post->is_archived]) >
    <td class="border border-gray-300 rounded-md p-1">{{ $post->title }}</td>
    <td class="border border-gray-300 rounded-md p-1">{{ str($post->content)->words(7) }}</td>
    @unless($post->is_archived)
    <th>
        <button 
            wire:click="archive" 
            wire:confirm="Are you sure you want to Archive {{ $post->title }} ?"
            type="button" 
            class="border border-gray-300 p-1.5 rounded-md cursor-pointer">Archive
        </button>
    </th>
    @endunless
    <th>
        <button 
            wire:click="$parent.delete({{ $post->id }})" 
            wire:confirm="Are you sure you want to delete {{ $post->title }} ?"
            type="button" 
            class="border border-gray-300 p-1.5 rounded-md cursor-pointer">Delete
        </button>
    </th>
   
</tr>