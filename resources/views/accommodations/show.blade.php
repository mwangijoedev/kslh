<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>KSLH Packages</title>
   @vite('resources/css/app.css', 'resources/js/app.js')
</head>
<body>
    
<div class="bg-white">
  <div class="pt-6">
    <nav aria-label="Breadcrumb">
      <ol role="list" class="mx-auto flex max-w-2xl items-center space-x-2 px-4 sm:px-6 lg:max-w-7xl lg:px-8">
        <li>
          <!-- standard home -->
          <div class="flex items-center">
            <a href="/home" class="mr-2 text-sm font-medium text-gray-900">Home</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <!-- package category (ngulia, voi, mombasa) -->
          <div class="flex items-center">
            <a href="#" class="mr-2 text-sm font-medium text-gray-900">Mombasa Beach Hotel</a>
            <svg width="16" height="20" viewBox="0 0 16 20" fill="currentColor" aria-hidden="true" class="h-5 w-4 text-gray-300">
              <path d="M5.697 4.34L8.98 16.532h1.327L7.025 4.341H5.697z" />
            </svg>
          </div>
        </li>
        <li>
          <!-- package name ->current page -->
        <li class="text-sm">
          <a href="/accommodation/{{ $accommodation->id }}" aria-current="page" class="font-medium text-gray-500 hover:text-gray-600">{{ $accommodation->name }}</a>
        </li>
      </ol>
    </nav>

    <!-- Package Image gallery -> 4 images  -->
    <div class="mx-auto mt-6 max-w-2xl sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:gap-x-8 lg:px-8">
      <img src="{{ Vite::asset('resources/images/hut.jpg') }}" alt="Two each of gray, white, and black shirts laying flat." class="hidden size-full rounded-lg object-cover lg:block">
      <div class="hidden lg:grid lg:grid-cols-1 lg:gap-y-8">
        <img src="{{ Vite::asset('resources/images/safari.jpg') }}" alt="Model wearing plain black basic tee." class="aspect-3/2 w-full rounded-lg object-cover">
        <img src="{{ Vite::asset('resources/images/photo2.jpg') }}" alt="Model wearing plain gray basic tee." class="aspect-3/2 w-full rounded-lg object-cover">
      </div>
      <img src="{{ Vite::asset('resources/images/palm.jpg') }}" alt="Model wearing plain white basic tee." class="aspect-4/5 size-full object-cover sm:rounded-lg lg:aspect-auto">
    </div>

    <!-- Package info -->
    <div class="mx-auto max-w-2xl px-4 pt-10 pb-16 sm:px-6 lg:grid lg:max-w-7xl lg:grid-cols-3 lg:grid-rows-[auto_auto_1fr] lg:gap-x-8 lg:px-8 lg:pt-16 lg:pb-24">
      <div class="lg:col-span-2 lg:border-r lg:border-gray-200 lg:pr-8">
        <!-- fetch package name -->
        <h1 class="text-2xl font-bold tracking-tight text-gray-900 sm:text-3xl">{{ $accommodation->name }}</h1>
      </div>

      <!-- Left side package Description -->
      <div class="mt-4 lg:row-span-3 lg:mt-0">
        <h2 class="sr-only">Package information</h2>
        <!-- fetch package cost  -->
        <p class="text-3xl tracking-tight text-gray-900">{{ $accommodation->price }}</p>

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
            <p class="sr-only">4 out of 5 stars</p>
            <!-- fetch number of reviews -->
            <a href="/{$package->reviews}" class="ml-3 text-sm font-medium text-indigo-600 hover:text-indigo-500 cursor-pointer ">117 reviews</a>
          </div>
        </div>

        <form method="POST" action="/book/{{ $accommodation->id }}" class="mt-10">
          @csrf

          <!-- Options -->
          <div class="mt-10">
            <div class="flex items-center justify-between">
              <h3 class="text-sm font-medium text-gray-900">Package Inclusions</h3>
              <!-- link to page with more details about the package  -->
              <a href="/{$package->id}/more" class="text-sm font-medium text-indigo-600 hover:text-indigo-500">Learn More</a>
            </div>

            <fieldset aria-label="Package Inclusions" class="mt-4">
              <div class="grid grid-cols-4 gap-4 sm:grid-cols-8 lg:grid-cols-4">
                <!-- Active: "ring-2 ring-indigo-500" -->
                 <!-- convert into travel-icon -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-gray-50 px-4 py-3 text-sm font-medium text-gray-200 hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                  <input type="radio" name="size-choice" value="XXS" disabled class="sr-only">
                  <span>✈️ Departures</span>
                  <span aria-hidden="true" class="pointer-events-none absolute -inset-px rounded-md border-2 border-gray-200">
                    <svg class="absolute inset-0 size-full stroke-2 text-gray-200" viewBox="0 0 100 100" preserveAspectRatio="none" stroke="currentColor">
                      <line x1="0" y1="100" x2="100" y2="0" vector-effect="non-scaling-stroke" />
                    </svg>
                  </span>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                  
                  <span>🚢 Transfers</span>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                  
                  <span>🗺 Guide Service</span>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                  
                  <span>💸 Entry Fees</span>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                  
                  <span>🏆 Activities</span>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                 
                  <span>🧳 Luggage</span>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                  
                  <span>🚗 Road Trips</span>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
                <!-- Active: "ring-2 ring-indigo-500" -->
                <label class="group relative flex cursor-pointer items-center justify-center rounded-md border bg-white px-4 py-3 text-sm font-medium text-gray-900 shadow-xs hover:bg-gray-50 focus:outline-hidden sm:flex-1 sm:py-6">
                 
                  <span>🏨 Hotel</span>
                  <!--
                    Active: "border", Not Active: "border-2"
                    Checked: "border-indigo-500", Not Checked: "border-transparent"
                  -->
                  <span class="pointer-events-none absolute -inset-px rounded-md" aria-hidden="true"></span>
                </label>
              </div>
            </fieldset>
          </div>
          {{-- Book Button  --}}
          <button type="submit" role="button" tabindex="0" class="mt-10 flex w-full items-center justify-center rounded-md border border-transparent bg-indigo-600 px-8 py-3 text-base font-medium text-white hover:bg-indigo-700 focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 focus:outline-hidden">Reserve your spot</button>
        </form>
      </div>

      <div class="py-10 lg:col-span-2 lg:col-start-1 lg:border-r lg:border-gray-200 lg:pt-6 lg:pr-8 lg:pb-16">
        <!-- Description and details -->
        <div>
          <h3 class="sr-only">Description</h3>

          <div class="space-y-6">
            <p class="text-base text-gray-900">{{$accommodation->description}}! 🌴🐘🌊
            Escape reality with our exclusive travel packages, 
            blending the thrill of a wildlife safari with the serenity of pristine beaches. 
            Stay in luxurious safari lodges, embark on breathtaking game drives,
            and soak in the rich Swahili culture. 
            Whether you crave adventure or relaxation, this is your perfect getaway. 
            Book now and let the magic begin! ✨🚀</p>
          </div>
        </div>

        {{-- <div class="mt-10">
          <h3 class="text-sm font-medium text-gray-900">Highlights</h3>
          <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              <li class="text-gray-400"><span class="text-gray-600">✔ {{ $accommodation->highlight1 }}</span></li>
              <li class="text-gray-400"><span class="text-gray-600">✔ {{ $accommodation->highlight2 }}</span></li>
              <li class="text-gray-400"><span class="text-gray-600">✔ {{ $accommodation->highlight3 }}</span></li>
              <li class="text-gray-400"><span class="text-gray-600">✔ {{ $accommodation->highlight4 }}</span></li>
            </ul>
          </div>
        </div> --}}

        <div class="mt-4">
            <ul role="list" class="list-disc space-y-2 pl-4 text-sm">
              <li class="text-gray-400"><span class="text-gray-600">✔ {{ $accommodation->day1 }}</span></li>
              {{-- <li class="text-gray-400"><span class="text-gray-600">✔ {{ $accommodation->day2 }}</span></li>
              <li class="text-gray-400"><span class="text-gray-600">✔ {{ $accommodation->day3 }}</span></li> --}}
            </ul>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</html>



