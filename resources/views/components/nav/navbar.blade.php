@props(['employers'])
<div class="hidden sm:block">
<nav class="bg-transparent hover:bg-white transition-ease-in-out duration-500 hover:bg-opacity-20 hover:rounded hover:rounded-lg p-1 flex justify-between items-center sticky top-0 xsm:flex-col sm:flex-col  md:flex-row ">
         <div class=" px-10 py-10 bg-transparent bg-cover bg-center" style="background-image: url('{{ Vite::asset('resources/images/logo.png')}}');" ></div>
        <div class="space-x-6 font-bold text-green-400 xsm:flex-col sm:flex sm:flex-col  md:flex-row">
            <a href="#merch" class="hover:text-green-600 transition duration-300">Merch</a>      
            <a href="#merch" class="hover:text-green-600 transition duration-300">T-Shirts</a>
            <a href="#merch" class="hover:text-green-600 transition duration-300">Trousers</a>  
            <a href="#merch" class="hover:text-green-600 transition duration-300">Tickets</a>    

        </div>
        <div class="space-x-6">     
                <a href="/register" class="text-white px-4 py-2 m-4 rounded-lg hover:bg-green-900 hover:text-black transition duration-300">Join-Us</a>           
            @auth    
                <a href="/logout" wire:navigate class="hover:text-green-600 transition duration-300">Sign Out</a>
            @endauth
        </div>
    </nav>
        </div>

        <!-- small screen nav -->
        <nav class=" flex-col p-2 py-4 border-b border-white/20 bg-white/5 rounded-md block sm:hidden transition-all duration-500 ease-in-out">
            <div class="flex justify-between items-center w-full ">
                
                <div>
                    <button class="border border-white/10 rounded-md px-3 bg-white/5 block hover:bg-blue-400 transition-color duration-500 ease-in-out group">
                        <svg class="block h-6 w-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                        </svg>
                    </button>

                </div>
                <div>
                    <a href="/">
                        <img src="{{Vite::asset('resources/images/logo.svg')}}" alt="" srcset="">
                    </a>
                </div>
                @guest
                <div class="space-x-4">
                    <x-nav.button><a href="/login">Login</a></x-nav.button>
                    <x-nav.button><a href="/register">Register</a></x-nav.button>
                </div>
                
            @endguest  
                @auth
                    <form action="/logout" method="POST">
                            @csrf
                            @method('DELETE')
    
                                <x-nav.button type="submit">Logout</x-nav.button>
                    </form>
                    
                @endauth
            </div>
            <div class="space-y-6  mt-4 font-bold flex flex-col sm:hidden transition-all duration-300 ease-in-out">
                <x-nav.anchor href="/tags">Merch</x-nav.anchor>
                <x-nav.anchor href="/profile">Shirts</x-nav.anchor>
                <x-nav.anchor href="/">Trousers</x-nav.anchor>
                <x-nav.anchor href="/employers">Polos</x-nav.anchor>
                <x-nav.anchor href="/job/create">TIckets</x-nav.anchor>
            </div>


        </nav>