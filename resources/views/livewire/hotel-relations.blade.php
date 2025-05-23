<div class="bg-gray-950 max-h-screen overflow-auto no-scrollbar py-10 px-4 sm:px-6 lg:px-8">
    <h2 class="text-center text-3xl font-audiowide text-gray-200 mb-10">Explore {{ $hotel->name }}</h2>

    <p class="text-start text-2xl font-bold text-gray-200 ml-10 mb-10 mt-5">Accommodation</p>
        <div class="space-y-2 mb-10">
            <p class="text-base text-gray-600">🌴With options to choose from!</p>
        </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pb-10 border-b-2 border-gray-800 ">
        @foreach($hotel->rooms as $room)
            <livewire:display-service :service="$room" :key="$room->id" />
        @endforeach
    </div>
    
    <p class="text-start text-2xl font-bold text-gray-200 ml-10 mb-10 mt-5">Bars</p>
        <div class="space-y-2 mb-10">
            <p class="text-base text-gray-600">🌴With options to choose from!</p>
        </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pb-10 border-b-2 border-gray-800 ">
        @foreach($hotel->bars as $bar)
            <livewire:display-service :service="$bar" :key="$bar->id" />
        @endforeach
    </div>

    <p class="text-start text-2xl font-bold text-gray-200 ml-10 mb-10 mt-5">Restaurants</p>
        <div class="space-y-2 mb-10">
            <p class="text-base text-gray-600">🌴With options to choose from!</p>
        </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pb-10 border-b-2 border-gray-800 ">
        @foreach($hotel->restaurants as $restaurant)
            <livewire:display-service :service="$restaurant" :key="$restaurant->id" />
        @endforeach
    </div>

    <p class="text-start text-2xl font-bold text-gray-200 ml-10 mb-10 mt-5">Events</p>
        <div class="space-y-2 mb-10">
            <p class="text-base text-gray-600">🌴With options to choose from!</p>
        </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pb-10 border-b-2 border-gray-800 ">
        @foreach($hotel->events as $event)
            <livewire:display-service :service="$event" :key="$event->id" />
        @endforeach
    </div>

    <p class="text-start text-2xl font-bold text-gray-200 ml-10 mb-10 mt-5">Conferencing Halls</p>
        <div class="space-y-2 mb-10">
            <p class="text-base text-gray-600">🌴With options to choose from!</p>
        </div>
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8 pb-10 border-b-2 border-gray-800 ">
        @foreach($hotel->halls as $hall)
            <livewire:display-service :service="$hall" :key="$hall->id" />
        @endforeach
    </div>
</div>
