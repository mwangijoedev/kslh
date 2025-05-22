<div>
    {{-- Do your work, then step back. --}}

    <form wire:submit="save">

    <h1>Lets touch on some Alpine Now</h1>

        <div x-data="{ title: @entangle('title') }">
            <p x-text="title"></p>

            <button type="button" x-on:click="title=''" class="border rounded-md p-1.2">
                Clear
                </button>
        </div>

        <p x-text="title"></p>

            <label>
                <span>Title</span>
                <input wire:model="title" type="text" class="text-black">
            @error('title')
                <em>{{ $message }}</em>
            @enderror
            </label>

            <br>
            <label>
                <span>Content</span>
                <input wire:model="content" type="text" class="text-black">
                @error('content')
                <em>{{ $message }}</em>
                @enderror
            </label>

        <button type="submit">
            Submit
        </button>
    </form>

    

</div>
