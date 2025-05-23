<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSLH</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <!-- AlpineJS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <!-- jQuery for loader -->
    <script src="https://code.jquery.com/jquery-3.7.1.js"
            integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4="
            crossorigin="anonymous"></script>

    <style>
        body, html {
            margin: 0;
            padding: 0;
            scroll-behavior: smooth;
        }
        
    </style>
</head>

<body class="bg-gray-950 text-white min-h-screen overflow-x-hidden select-none">
    <!-- Loader -->
    <div id="loader" class="fixed inset-0 z-50 bg-gradient-to-br from-gray-950 to-blue-950 flex flex-col items-center justify-center">
        <p class="m-0 font-audiowide text-2xl md:text-4xl animate-pulse text-amber-700 text-center">KSLH</p>
    </div>

    <!-- Main App Container -->
    <div id="app" class="hidden flex flex-col min-h-screen">

        <!-- Navigation -->
        <nav x-data="{ open: false }" class="p-4 lg:px-8 shadow-xl relative z-10 bg-gradient-to-br from-gray-950 to-blue-950">
            <div class="flex items-center justify-between">
                <!-- Logo -->
                <a href="/" class="text-amber-700 font-audiowide text-2xl font-bold cursor-pointer ">KSLH</a>

                <!-- Mobile Menu Button -->
                <div class="lg:hidden">
                    <button @click="open = !open" class="text-gray-300 hover:text-white focus:outline-none">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"
                             stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round">
                            <path d="M4 6h16M4 12h16M4 18h16"/>
                        </svg>
                    </button>
                </div>

                <!-- Desktop Menu -->
                <div class="hidden lg:flex gap-x-8 font-audiowide text-sm text-gray-400">
                    <a href="/hotel/show/ngulia" class="hover:text-amber-700 transition">ngulia</a>
                    <a href="/hotel/show/voi" class="hover:text-amber-700 transition">voi</a>
                    <a href="/hotel/show/mombasa" class="hover:text-amber-700 transition">mombasa</a>
                </div>

                <!-- Auth Buttons -->
                @guest
                    <a href="/login" class="hidden lg:block text-gray-300 font-audiowide text-sm hover:text-amber-700 transition">log in</a>
                @endguest
                @auth
                    <div class="hidden lg:flex gap-x-4 font-semibold text-sm">
                        <a href="/dashboard" class="text-gray-300 hover:text-amber-900">dashboard</a>
                        <a href="/profile" class="text-gray-300 hover:text-amber-900">profile</a>
                    </div>
                @endauth
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" x-transition class="mt-4 lg:hidden space-y-4 text-sm font-audiowide text-gray-200">
                <a href="/hotel/show/ngulia" class="block hover:text-amber-700">ngulia</a>
                <a href="/hotel/show/voi" class="block hover:text-amber-700">voi</a>
                <a href="/hotel/show/mombasa" class="block hover:text-amber-700">mombasa</a>
                @guest
                    <a href="/login" class="block text-amber-900 hover:text-amber-700">log in</a>
                @endguest
                @auth
                    <a href="/dashboard" class="block text-amber-700 hover:text-amber-900">Dashboard</a>
                    <a href="/profile" class="block text-amber-700 hover:text-amber-900">{{ Auth::user()->name }} →</a>
                @endauth
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>
    </div>

    <!-- Loader Script -->
    <script>
        $(window).on('load', function () {
            $('#loader').fadeOut(500, function () {
                $('#app').fadeIn(500);
            });
        });
    </script>
</body>
</html>
