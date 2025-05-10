<x-slot:lang>en</x-slot:>
<div class="p-20 absolute top-20 left-20">
    <form action="counter" wire:wire:submit="save" method="POST">
        @csrf
        <input type="text" id="text" wire:model="name"  name="name" value="{{ $name }}">
        <button wire:click="save" class="px-4 bg-black text-white rounded-md" type="submit">Save</button>
    </form>

    <h1>{{$name}}</h1>
    @foreach ($accommodations as $accommmodation)
        <div class="flex flex-col" wire:key="{{ $accommmodation->id }}">
            <div class="flex flex-row border-b-2 border-gray-200">
                <div class="w-1/2">
                    <h1>{{$name}}</h1>
                </div>
                <div class="w-1/2">
                    <h1>{{ $accommmodation->price }}</h1>
                </div>
            </div>
    @endforeach

    <div class="px-20 py-10 bg-gray-900 text-blue-300  border-l-4px border-black">
        <h1 class="text-2xl font-bold">{{ $owner }}</h1>
    </div>
</div>