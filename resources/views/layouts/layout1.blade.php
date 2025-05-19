<!DOCTYPE html>
<html>
<head>
    <title>KSLH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
</head>
<body class="bg-gradient-to-br from-gray-900 to-blue-900 select-none">
    <div class="loader bg-gradient-to-br from-gray-900 to-blue-900 flex flex-cols justify-center items-center">
        <p class="font-audiowide text-sm md:text-4xl animate-pulse text-amber-700 text-center">KSLH</p>
    </div>
    <div class="h-screen relative top-0 left-0 bottom-0 right-0 md:relative overflow-scroll no-scrollbar content">
        <div>
            <div class="bg-gradient-to-br from-gray-900 to-blue-900">
               <nav x-data="{ open: false }" class="bg-gray-800/20 shadow-xl p-4 lg:px-8 rounded-sm z-40 relative" aria-label="Global">
    <div class="flex items-center justify-between">
        <!-- Logo -->
        <div class="flex lg:flex-1">
            <a href="/" class="-m-1.5 p-1.5  sm:block z-1">
                <span class="text-amber-700 font-audiowide font-bold text-md sm:text-xl ">KSLH</span>
            </a>
        </div>

        <!-- Mobile Toggle Button -->
        <div class="flex lg:hidden">
            <button @click="open = !open" type="button" class="inline-flex items-center justify-center rounded-md p-2.5 text-gray-300 hover:text-white">
                <span class="sr-only">Open main menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true">
                    <path stroke-linecap="round" stroke-linejoin="round" 
                          d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                </svg>
            </button>
        </div>

        <!-- Desktop Navigation -->
        <div class="hidden lg:flex lg:gap-x-12 z-1 font-audiowide text-gray-400 text-xs">
            <a href="/hotel/show/ngulia" class="hover:text-amber-700 hover:scale-105 transition-all ease-in-out duration-200">ngulia</a>
            <a href="/hotel/show/voi" class="hover:text-amber-700 transition-all ease-in-out duration-200">voi</a>
            <a href="/hotel/show/mombasa" class="hover:text-amber-700 transition-all ease-in-out duration-200">mombasa</a>
        </div>

        <!-- Auth Buttons -->
        @guest
        <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login" class="text-xs font-audiowide text-amber-900 z-1 hover:text-amber-700 transition-all ease-in-out duration-500">log&nbsp;in <span aria-hidden="true">&rarr;</span></a>
        </div>
        @endguest

        @auth
        <div class="hidden lg:flex lg:flex-1 lg:justify-end font-audiowide gap-x-4">
            <a href="/dashboard" class="text-xs text-amber-700 z-1 hover:text-amber-900 transition-all ease-in-out duration-500">Dashboard</a>
            <a href="/profile" class="text-xs text-amber-700 z-1 hover:text-amber-900 transition-all ease-in-out duration-500">{{ Auth::user()->name }} <span aria-hidden="true">&rarr;</span></a>
        </div>
        @endauth
    </div>

    <!-- Mobile Menu -->
    <div x-show="open" x-transition class="lg:hidden mt-4 font-audiowide text-sm text-gray-200 space-y-4">
        <a href="/hotel/show/ngulia" class="block hover:text-amber-700">ngulia</a>
        <a href="/hotel/show/voi" class="block hover:text-amber-700">voi</a>
        <a href="/hotel/show/mombasa" class="block hover:text-amber-700">mombasa</a>

        @guest
        <a href="/login" class="block text-amber-900 hover:text-amber-700">log in →</a>
        @endguest

        @auth
        <a href="/dashboard" class="block text-amber-700 hover:text-amber-900">Dashboard</a>
        <a href="/profile" class="block text-amber-700 hover:text-amber-900">{{ Auth::user()->name }} →</a>
        @endauth
    </div>
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

        // optimize this function later
        function pointsViewer(targetPoints) {
            return {
                points: 0,
                startCounter() {
                    let interval = setInterval(() => {
                        if (this.points < targetPoints) {
                            this.points++;
                        } else {
                            clearInterval(interval);
                        }
                    }, 1); // 1 millisecond increment
                }
            }
        }
</script>
</body>
</html>

