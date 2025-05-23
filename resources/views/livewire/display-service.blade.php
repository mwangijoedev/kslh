<div class="bg-gray-900 rounded-xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
    <div class="h-48 sm:h-56 w-full overflow-hidden">
        <img src="{{ Vite::asset('resources/images/hut.jpg') }}"
                alt="{{ $service->name }}"
                class="object-cover object-center h-full w-full transition-transform duration-500 hover:scale-105">
    </div>
    <div class="p-6">
        <h3 class="text-xl font-semibold text-amber-400 mb-2">{{ $service->name }}</h3>
        <p class="text-gray-300 text-sm mb-4">
            {{ \Illuminate\Support\Str::words(strip_tags($service->description), 20, '...') }}
        </p>
         @switch($service->service_tag)
            @case('accommodation')
                <a href="/room/{{ $service->id }}" wire:navigate
                    class="mt-2 inline-flex items-center px-4 py-2 border border-indigo-500 text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium rounded-md transition duration-300">
                    View Details &rarr;
                </a>
                @break
            @case('bar')
                <a href="/bar/{{ $service->id }}" wire:navigate
                    class="mt-2 inline-flex items-center px-4 py-2 border border-indigo-500 text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium rounded-md transition duration-300">
                    View Details &rarr;
                </a>
                @break
            @case('event')
                <a href="/event/{{ $service->id }}" wire:navigate
                    class="mt-2 inline-flex items-center px-4 py-2 border border-indigo-500 text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium rounded-md transition duration-300">
                    View Details &rarr;
                </a>
                @break
            @case('conferencing')
                <a href="/hall/{{ $service->id }}" wire:navigate
                    class="mt-2 inline-flex items-center px-4 py-2 border border-indigo-500 text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium rounded-md transition duration-300">
                    View Details &rarr;
                </a>
                @break
            @case('dining')
                <a href="/restaurant/{{ $service->id }}" wire:navigate
                    class="mt-2 inline-flex items-center px-4 py-2 border border-indigo-500 text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium rounded-md transition duration-300">
                    View Details &rarr;
                </a>
                @break
         @endswitch
        
    </div>
</div>