<div>
    <div class="relative h-[1000px] w-full bg-gray-950 text-blue-300 ">
        {{-- Flash messages --}}
        @foreach (['success', 'error', 'status'] as $msg)
            @if (session($msg))
                <div class="pt-20 bg-gray-950 text-center font-semibold text-md uppercase text-sm text-blue-300 font-audiowide"
                x-data="{ show: true }" 
                x-show="show" 
                x-init="setTimeout(() => show = false, 7000)"
                >
                    {{ session($msg) }}
                </div>
            @endif
        @endforeach
        <div class="absolute h-screen left-0 right-0  mt-5  flex flex-row justify-start no-wrap ">
            <!-- left Navigation   -->
            <div id="left-Navigation" class="hidden lg:block">
                <nav 
                    class="grid grid-rows overflow-scroll gap-[2px] justify-center 
                            items-center
                            h-screen no-scrollbar
                            bg-gray-950 
                ">
                    @if ($user->photo)
                    <div class="flex-start p-20 scale-[10px] rounded-full bg-cover bg-center" style="background-image: url('{{ asset('storage/'.$user->photo) }}');"></div>
                    @else
                    <div class="flex-start p-20 scale-[10px] rounded-full bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/profile-pic.jpeg') }}');"></div>
                    <div class=" pl-5 text-blue-300 text-sm text-start">
                        <a href="/profile#photo" class="text-gray-600 text-xs hover:text-amber-700">Add Profile Picture</a>
                    </div>
                    @endif
                    <div class="pl-5 text-start">
                        <form action="/logout" method="post" >
                            @csrf
                            <button type="submit" class="text-blue-300 text-sm hover:text-amber-700 transition-all ease-in-out duration-500">
                                Logout &rarr;
                            </button>
                        </form>
                    </div>
                    <div class=" pl-5 text-blue-300 text-sm text-start">
                        <a href="#past-bookings" class="text-gray-600 text-xs hover:text-amber-700">Past Bookings</a>
                    </div>
                    <div class="pl-5 text-blue-300 text-sm text-start">
                        <a href="/profile" class="text-gray-600 text-xs hover:text-amber-700">Edit Profile</a>
                    </div>
                    <div class="pl-5 text-blue-300 text-sm text-start">
                        <a href="#update-payment-info" class="text-gray-600 text-xs hover:text-amber-700">Update Payment info</a>
                    </div>
                    @can('create', Auth::user())
                        <div class="pl-5 text-blue-300 text-sm text-start">
                            <a href="/hotel/create" class="text-gray-600 text-xs hover:text-amber-700">Add Hotel</a>
                        </div>  
                        <div class="pl-5 text-blue-300 text-sm text-start">
                            <a href="/room/create" class="text-gray-600 text-xs hover:text-amber-700">Add Accommodation Service</a>
                        </div>
                        <div class="pl-5 text-blue-300 text-sm text-start">
                            <a href="/restaurant/create" class="text-gray-600 text-xs hover:text-amber-700">Add Dining Service </a>
                        </div> 
                    @endcan
                </nav>
            </div>
            <!-- Recent Bookings Section   -->
            <div class=" bg-gradient-to-br from-gray-950 to-blue-900 h-screen grow rounded-sm mx-5 mb-5 overflow-scroll no-scrollbar px-5 ">
                <div class=" py-6 ">
                    <p class="text-start text-gray-500 text-xs">Welcome {{$user->name}}</p>
                    <p class="text-start text-gray-500 text-md"  x-data="pointsViewer({{$user->points}})">Loyalty Points: <span class="font-audiowide text-blue-900 text-2xl text-center">{{$user->points}}</span></p>
                    <p class="text-center text-gray-300 text-xl">For you</p>
                  
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 " >
                    @foreach ($rooms as $room)
                        <div wire:key="{{ $room->id }}" class="bg-gray-900 rounded-xl shadow-md hover:shadow-lg transition duration-300 overflow-hidden">
                            <div class="h-48 sm:h-56 w-full overflow-hidden">
                                <img src="{{ Vite::asset('resources/images/hut.jpg') }}"
                                    alt="{{ $room->name }}"
                                    class="object-cover object-center h-full w-full transition-transform duration-500 hover:scale-105">
                            </div>
                            <div class="p-6">
                                <h3 class="text-xl font-semibold text-amber-400 mb-2">{{ $room->name }}</h3>
                                <p class="text-gray-300 text-sm mb-4">
                                    {{ \Illuminate\Support\Str::words(strip_tags($room->description), 20, '...') }}
                                </p>
                                <a href="/room/{{ $room->id }}" wire:navigate
                                    class="mt-2 inline-flex items-center px-4 py-2 border border-indigo-500 text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium rounded-md transition duration-300">
                                    View Details &rarr;
                                </a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
