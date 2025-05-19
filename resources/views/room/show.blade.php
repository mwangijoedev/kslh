<x-layout1>
    <body class="bg-gray-950">
        <div class="bg-gray-950 pb-20 select-none">
            <div class="pt-6">
                <header>
                    <h2 class="text-gray-300 my-2 text-lg sm:text-4xl text-center font-audiowide">{{$room->name}}</h2>
                </header>
                <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
                    <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
                        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $room->name }}</h1>
                    </div>
                    <div class="mt-4 lg:row-span-3 lg:mt-0">
                        <div class="mx-auto max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                            <div class="col-span-2 hidden lg:g grid lg:grid-cols-1 lg:gap-y-8">
                                <img src="{{ Vite::asset('resources/images/safari.jpg') }}" alt="Center Photo" class="size-full w-full rounded-lg object-cover">
                            </div>
                        </div>
                    </div>
                    <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
                        <div>
                            <h3 class="sr-only">Description</h3>
                            <div class="space-y-6">
                                <div class="text-base text-gray-300">{{$room->description}}! 🌴🐘🌊 
                                    <br>
                                    Escape reality with our exclusive travel packages, 
                                    blending the thrill of a wildlife safari with the serenity of pristine beaches. 
                                    Stay in luxurious safari lodges, embark on breathtaking game drives,
                                    and soak in the rich Swahili culture. 
                                    Whether you crave adventure or relaxation, this is your perfect getaway. 
                                    Book now and let the magic begin! ✨🚀
                                </div>
                            </div>
                        </div>
                        <form method="POST" action="/book/{{ $room->id }}" class="hidden sm:block mt-2 mb-10 sm:flex sm:justify-end">
                            @csrf
                            <button type="submit" role="button" tabindex="0" class="mt-10 animate-pulse hover:animate-none transition-all ease-in-out duration-300 cursor-pointer flex w-1/2 items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">Add to Package cart</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="mx-auto max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
                <div class="col-span-1 mt-4 lg:row-span-3 lg:mt-0">
                    <a href="/hotel/{{ $room->hotel_tag }}" class="text-3xl tracking-tight text-gray-700 uppercase">{{ $room->hotel_tag }}</a>
                    <div class="mt-6">
                        <h3 class="sr-only">Ratings</h3>
                        <div class="flex items-center">
                            <div class="flex items-center">
                                <!-- Active: "text-gray-900", Default: "text-gray-200" -->
                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-gray-900" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                                <svg class="size-5 shrink-0 text-gray-200" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true" data-slot="icon">
                                    <path fill-rule="evenodd" d="M10.868 2.884c-.321-.772-1.415-.772-1.736 0l-1.83 4.401-4.753.381c-.833.067-1.171 1.107-.536 1.651l3.62 3.102-1.106 4.637c-.194.813.691 1.456 1.405 1.02L10 15.591l4.069 2.485c.713.436 1.598-.207 1.404-1.02l-1.106-4.637 3.62-3.102c.635-.544.297-1.584-.536-1.65l-4.752-.382-1.831-4.401Z" clip-rule="evenodd" />
                                </svg>
                            </div>
                            <p class="sr-only">4 out of 5 stars</p>
                            <a href="/reviews" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500 cursor-pointer">117 reviews</a>
                        </div>
                    </div>
                    <form method="POST" action="/book/{{ $room->id }}" class="mt-10">
                        @csrf
                        <div class="mt-10">
                            <div class="flex items-center justify-between">
                                <h3 class="text-sm font-medium text-gray-900">{{ $room->service_tag }}</h3>
                                <a href="/hotel/show/{{ $room->hotel_tag }}" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">
                                    <span class="relative flex size-3">
                                        <span class="absolute inline-flex h-full w-full animate-ping rounded-full bg-blue-100 opacity-75"></span>
                                        <span class="relative inline-flex size-3 rounded-full bg-indigo-600"></span>
                                    </span>
                                    View Hotel
                                </a>
                            </div>
                            <fieldset aria-label="Package Inclusions" class="mt-4">
                                <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                                    @foreach ($amenities as $amenity)
                                        <label class="animate-pulse hover relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                                            <span class="text-gray-600 text-xs text-center">✔ {{ $amenity }}</span>
                                            <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                                        </label>
                                    @endforeach
                                </div>
                            </fieldset>
                        </div>
                        <button type="submit" role="button" tabindex="0" class="mt-10 animate-pulse hover:animate-none transition-all ease-in-out duration-300 cursor-pointer flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">Add to Package cart</button>
                    </form>
                </div>
                <div class="col-span-2 hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
                    <img src="{{ Vite::asset('resources/images/safari.jpg') }}" alt="Center Photo" class="size-full w-full rounded-lg object-cover">
                </div>
            </div>
        </div>
    </body>
</x-layout1>

