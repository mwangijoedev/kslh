<!DOCTYPE html>
<html>
<head>
    <title>KSLH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body>
    <div class="loader bg-gradient-to-br from-gray-900 to-blue-900 flex flex-cols justify-center items-center">
        <p class="font-audiowide text-sm md:text-4xl animate-pulse text-amber-700 text-center">KSLH</p>
    </div>
    <div class="h-screen relative top-0 left-0 bottom-0 right-0 md:relative overflow-scroll no-scrollbar content">
        <div>
            <div class="bg-gradient-to-br from-gray-900 to-blue-900">
                <nav class="bg-gray-800/20 shadow-xl flex items-center justify-between p-4 lg:px-8 rounded-sm z-4" aria-label="Global">
                    <div class="flex lg:flex-1">
                        <a href="/" wire:navigate class="-m-1.5 p-1.5 hidden sm:block z-1">
                            <span class="text-amber-700 font-audiowide font-bold text-xl">KSLH</span>
                        </a>
                    </div>
                    <div class="flex lg:hidden">
                        <button type="button" class="-m-2.5 inline-flex items-center justify-center rounded-md p-2.5 text-gray-700">
                            <span class="sr-only">Open main menu</span>
                            <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                            </svg>
                        </button>
                    </div>
                    <div class="hidden lg:flex lg:gap-x-12 z-1 font-audiowide text-gray-400 text-xs">
                        <a href="/accommodations" wire:navigate class="hover:text-amber-700 hover:scale-105 transition-all ease-in-out duration-200">ngulia</a>
                        <a href="/accommodations" wire:navigate class="hover:text-amber-700 transition-all ease-in-out duration-200">voi</a>
                        <a href="/accommodations" wire:navigate class="hover:text-amber-700 transition-all ease-in-out duration-200">mombasa</a>
                    </div>
                    @guest
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <a href="/login" class="text-xs font-audiowide text-amber-900 z-1 hover:text-amber-700 transition-all ease-in-out duration-500">log&nbsp;in <span aria-hidden="true">&rarr;</span></a>
                    </div>
                    @endguest
                    @auth
                    <div class="hidden lg:flex lg:flex-1 lg:justify-end">
                        <a href="/dashboard" class="text-xs text-amber-700 z-1 hover:text-amber-900 transition-all ease-in-out duration-500">{{ Auth::user()->name; }}<span aria-hidden="true">&rarr;</span></a>
                    </div>
                    @endauth
                </nav>
                <main class="relative">
                    {{ $slot }}
                </main>
            </div>
        </div>
    </div>
    <script>
        $(window).on('load', function () {
            $(".loader").fadeOut(1000);
            $(".content").fadeIn(1000);
        });
    </script>
</body>
</html>

