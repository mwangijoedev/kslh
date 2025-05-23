<div class="bg-gray-950">
  <div class="pt-2">
      <header>
        <h2 class="text-gray-300 my-2 text-lg sm:text-3xl text-center font-audiowide">{{$hotel->name}}</h2>
      </header>
    <!-- Package Image gallery -> 4 images  -->
    <div class="mx-auto lg:mx-1 mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
      <div style="background-image: url('{{ Vite::asset("resources/images/safari.jpg") }}')" class="bg-cover size-full bg-center col-span-2 rounded-lg" ></div>
      <img src="{{ Vite::asset("resources/images/palm.jpg") }}" class="hidden size-full rounded-lg object-cover lg:block">
    </div>

    <!-- Package info -->
    <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <!-- fetch package name -->
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $hotel->name }}</h1>
      </div>

      <!-- Left side package Description -->
      <div class="mt-4 lg:row-span-3 lg:mt-0">
        <h2 class="sr-only">Location</h2>
        <!-- fetch package cost  -->
        <p class="text-3xl tracking-tight text-gray-900">{{ $hotel->location }}</p>

        <!-- Stared Ratings -->
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
            <p class="sr-only">5 out of 5 stars</p>
            <!-- fetch number of reviews -->
            <a href="/reviews" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500 cursor-pointer ">120 reviews</a>
          </div>
        </div>
          <a href="/{{ $hotel->tag }}-services" wire:navigate class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium 
            text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 animate-pulse
            focus:ring-offset-2 focus:outline-hidden">Explore</a>
      </div>

      <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
        <!-- Description and details -->
        <div>
          <h3 class="sr-only">Description</h3>

          <div class="space-y-6">
            <p class="text-base text-gray-600">🌴🐘🌊{{$hotel->description}}!✨🚀</p>
          </div>
        </div>
        
        <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              @foreach ($higlights as $higlight )
              <li class="text-gray-400"><span class="text-gray-600">✔ {{ $higlight }} ✨🚀</span></li>  
              @endforeach
            </ul>
          </div>

        <a wire:navigate href="/hotels"
            class="mt-5 inline-flex items-center px-4 py-2 border border-indigo-500 
            text-indigo-300 hover:bg-indigo-600 hover:text-white text-sm font-medium 
            rounded-md transition duration-300">
            ALL HOTELS &rarr;
        </a>
        </div>
      </div>
    </div>
  </div>
</div>

