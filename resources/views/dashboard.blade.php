<x-layout1 class="relative">
    <div class="">
        <x-slot name="header">
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                {{ __('Dashboard') }}
            </h2>
        </x-slot>
        <div class="absolute top-0 left-0 right-0 bottom-0 mt-20 flex flex-row justify-start no-wrap ">
            <!-- left Navigation   -->
            <div id="left-Navigation" class="hidden lg:block">
                <nav class="grid grid-cols-1 overflow-scroll gap-1 justify-center items-center border-r-[2px] border-gray-400 px-8.5 py-5 h-screen no-scrollbar ">
                    <div class="p-13 overflow-hidden rounded-full bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/profile-pic.jpeg') }}');">
                    </div>
                    <div class="font-audiowide text-black text-sm text-center">
                        <p>{{ Auth::user()->name }}</p>
                    </div>
                    <div class="font-audiowide text-black text-sm text-center">
                        <form action="/logout" method="post" >
                            @csrf
                            <button type="submit" class="font-audiowide text-black text-sm hover:text-amber-700 transition-all ease-in-out duration-500">
                                Logout &rarr;
                            </button>
                        </form>
                    </div>
                    <div class="text-black text-sm text-center">
                        <a href="#past-bookings" class="text-black text-sm">Past Bookings</a>
                    </div>
                    <div class="text-black text-sm text-center">
                        <a href="#available-packages" class="text-black text-sm">Available Packages</a>
                    </div>
                    <div class="text-black text-sm text-center">
                        <a href="#loyalty-points" class="text-black text-sm">Loyalty Points</a>
                    </div>
                    <div class="text-black text-sm text-center">
                        <a href="#update-payment-info" class="text-black text-sm">Update Payment info</a>
                    </div>
                    <div class="text-black text-sm text-center">
                        <a href="#raise-ticket" class="text-black text-sm">Raise Ticket</a>
                    </div>                   
                </nav>
            </div>
            <!-- Recent Bookings Section   -->
            <div class=" h-screen grow border border-gray-400 rounded-sm mx-5 my-5 overflow-scroll no-scrollbar px-5">
                <div class=" py-6 ">
                    <p class="text-center text-black text-xl font-bold">Recent Bookings</p>
                    <p class="text-sm text-black">Here is a list of bookings you made recently</p>
                </div>

                <div class="grid grid-cols-1 gap-6 md:grid-cols-2 lg:grid-cols-3 " >
                    @foreach ($packages as $package)
                        <div class=" flex flex-col max-w-sm bg-gray-900 ">
                            <div class=" px-15 py-20 rounded-t rounded-lg bg-gray-100 relative " > 
                                <div class="bg-cover bg-center absolute top-0 left-0 right-0 bottom-0 rounded-xl" style="background-image: url('{{ Vite::asset('resources/images/safari.jpg') }}');" ></div>
                            </div>
                            <div class=" grid grid-cols-1 gap-2 p-5">
                                <div>
                                    <p class="text-black text-sm text-start font-audiowide ">{{ $package->name }}</p>
                                </div>
                                <div class=" overflow-hidden hover:overflow-scroll no-scrollbar max-h-md ">
                                    <p class="text-black text-sm">{{ $package->description }}</p>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</x-layout1>
