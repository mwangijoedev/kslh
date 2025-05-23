<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Page Title' }}</title>

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
        <div wire:loading 
        class="fixed inset-0 z-50 bg-gradient-to-br from-gray-950 to-blue-950 flex flex-col items-center justify-center">
            <p class="m-0 font-audiowide text-2xl md:text-4xl animate-pulse text-amber-700 text-center">
                KSLH
            </p>
        </div>


    <!-- Main App Container -->
    <div id="app" class=" flex flex-col min-h-screen">

        <!-- Navigation -->
        <nav x-data="{ open: false }" class=" p-4 lg:px-8 shadow-xl relative z-10 bg-gradient-to-br from-gray-950 to-blue-950">
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
                    <a href="/hotel/ngulia" wire:navigate   
                        @class([
                            'text-amber-700'=>request()->is('hotel/ngulia'),
                            'hover:text-amber-700 transition'=>true
                            ])>ngulia</a>
                    <a href="/hotel/voi" wire:navigate 
                        @class([
                            'text-amber-700'=>request()->is('hotel/voi'),
                            'hover:text-amber-700 transition'=>true
                            ])>voi</a>
                    <a href="/hotel/mombasa" wire:navigate 
                        @class([
                            'text-amber-700'=>request()->is('hotel/mombasa'),
                            'hover:text-amber-700 transition'=>true
                            ])>mombasa</a>
                </div>

                <!-- Auth Buttons -->
                @guest
                    <a href="/login" class="hidden lg:block text-gray-300 font-audiowide text-sm hover:text-amber-700 transition">log in</a>
                @endguest
                @auth
                    <div class="hidden lg:flex gap-x-4 font-semibold text-sm">
                        <a href="/dashboard"
                            @class([
                                'text-amber-700'=>request()->is('dashboard'),
                                'text-gray-300 hover:text-amber-900'=>true
                                ])>dashboard</a>
                        <a href="/profile"
                            @class([
                                'text-amber-700'=>request()->is('profile'),
                                'text-gray-300 hover:text-amber-900'=>true
                                ])>profile</a>
                    </div>
                @endauth
            </div>

            <!-- Mobile Menu -->
            <div x-show="open" x-transition class="mt-4 lg:hidden space-y-4 text-sm font-audiowide text-gray-200">
                   <div class="flex flex-col space-y-2">
                     <a href="/hotel/ngulia" wire:navigate   
                        @class([
                            'text-amber-700'=>request()->is('hotel/ngulia'),
                            'hover:text-amber-700 transition'=>true
                            ])>ngulia</a>
                    <a href="/hotel/voi" wire:navigate 
                        @class([
                            'text-amber-700'=>request()->is('hotel/voi'),
                            'hover:text-amber-700 transition'=>true
                            ])>voi</a>
                    <a href="/hotel/mombasa" wire:navigate 
                        @class([
                            'text-amber-700'=>request()->is('hotel/mombasa'),
                            'hover:text-amber-700 transition'=>true
                            ])>mombasa</a>
                   </div>
                @guest
                    <a href="/login" class="block text-amber-900 hover:text-amber-700">log in</a>
                @endguest
                @auth
                    <a href="/dashboard" 
                        @class([
                                    'text-amber-700'=>request()->is('profile'),
                                    'block text-gray-200 hover:text-amber-900'=>true
                                    ])>Dashboard</a>
                    <a href="/profile"
                        @class([
                                'text-amber-700'=>request()->is('hotel/mombasa'),
                                'block text-gray-200 hover:text-amber-900'=>true
                                ])>Profile</a>
                @endauth
            </div>
        </nav>

        <!-- Main Content -->
        <main class="flex-grow">
            {{ $slot }}
        </main>
    </div>
</body>
</html>






















