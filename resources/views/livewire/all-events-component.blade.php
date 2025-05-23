<div class="bg-gray-950 min-h-screen py-10 px-4 sm:px-6 lg:px-8">
    <h2 class="text-center text-3xl font-audiowide text-gray-200 mb-10">Explore Our Events</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">
        @foreach($events as $event)
            <div wire:key="{{ $event->id }}" class="bg-gray-900 rounded-xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                <div class="h-48 sm:h-56 w-full overflow-hidden">
                    <img src="{{ Vite::asset('resources/images/hut.jpg') }}"
                         alt="{{ $event->name }}"
                         class="object-cover object-center h-full w-full transition-transform duration-500 hover:scale-105">
                </div>
                <div class="p-6">
                    <h3 class="text-xl font-semibold text-amber-400 mb-2">{{ $event->name }}</h3>
                    <p class="text-gray-300 text-sm mb-4">
                        {{ \Illuminate\Support\Str::words(strip_tags($event->description), 20, '...') }}
                    </p>
                    <a href="/event/{{ $event->id }}" wire:navigate
                        class="mt-2 inline-flex items-center px-4 py-2 border border-indigo-500 text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium rounded-md transition duration-300">
                        View Details &rarr;
                    </a>
                </div>
            </div>
        @endforeach
    </div>
</div>
