<x-layout1>
    <header>
      <h2 class="text-gray-300 text-4xl pt-5 text-center font-audiowide bg-gray-950 ">DASHBOARD</h2>
    </header>
    <div class="relative h-[1000px] w-full bg-gray-950 text-blue-300 ">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>

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
                        <a href="#loyalty-points" class="text-gray-600 text-xs hover:text-amber-700">Loyalty Points</a>
                    </div>
                    <div class="pl-5 text-blue-300 text-sm text-start">
                        <a href="#update-payment-info" class="text-gray-600 text-xs hover:text-amber-700">Update Payment info</a>
                    </div>
                    @can('create', Auth::user())
                    <div class="pl-5 text-blue-300 text-sm text-start">
                        <a href="/create" class="text-gray-600 text-xs hover:text-amber-700">Add Package</a>
                    </div>  
                     <div class="pl-5 text-blue-300 text-sm text-start">
                        <a href="/hotel/create" class="text-gray-600 text-xs hover:text-amber-700">Add Hotel</a>
                    </div> 
                    @endcan
                </nav>
            </div>
            <!-- Recent Bookings Section   -->
            <div class=" bg-gradient-to-br from-gray-950 to-blue-900 h-screen grow rounded-sm mx-5 mb-5 overflow-scroll no-scrollbar px-5 ">
                <div class=" py-6 ">
                    <p class="text-start text-gray-500 text-xs">Welcome {{$user->name}}</p>
                    <p class="text-start text-gray-500 text-md"  x-data="pointsViewer({{$user->points}})" x-init="startCounter" >Loyalty Points: <span class="font-audiowide text-blue-900 text-2xl text-center"  x-text="points"></span></p>
                    <p class="text-center text-gray-300 text-xl">For you</p>
                  
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 " >
                    @foreach ($packages as $package)
                        <div class=" flex flex-col max-w-sm bg-gray-800 rounded-sm overflow-hidden shadow-xl hover:scale-105 transition-all ease-in-out duration-200">
                            <div class=" px-10 py-15 rounded-t rounded-lg relative " > 
                                <div class="bg-cover bg-center blur-xs absolute top-0 left-0 right-0 bottom-0" style="background-image: url('{{ Vite::asset('resources/images/safari.jpg') }}');" ></div>
                            </div>
                            <div class=" grid grid-cols-1 gap-2 p-5">
                                <div>
                                    <p class="text-gray-400 text-xs text-start font-audiowide uppercase ">{{ $package->name }}</p>
                                </div>
                                <div class=" overflow-hidden hover:overflow-scroll no-scrollbar max-h-md ">
                                    <p class="text-gray-400 text-sm">{{ $package->description }}</p>
                                </div>
                            </div>
                            <form action="/accommodation/{{ $package->id }}" method="GET">
                                @csrf
                                <div class="flex flex-row justify-between items-center px-5 py-2">
                                    <p class="text-blue-600 text-sm">{{ $package->currency }} {{ $package->price }}</p>
                                    <button type="submit" class="px-4 bg-amber-900 
                                                                text-white 
                                                                hover:bg-amber-700
                                                                hover:text-gray-900
                                                                hover:scale-105
                                                                transition-all ease-in-out duration-200
                                                                text-xs
                                                                px-2 py-1
                                                                rounded-md">Explore</button>
                                </div>
                            </form>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout1>
