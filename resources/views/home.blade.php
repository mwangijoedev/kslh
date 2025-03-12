<!DOCTYPE html>
<html>
<head>
    <title>KSLH Applicaton</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
</head>
<body>
  <div class="loader bg-lime-950 flex flex-cols justify-center items-center ">
    <p class=" font-audiowide text-sm md:text-4xl animate-pulse text-amber-700 text-center ">KSLH</p>
  </div>
<div class="bg-lime-950 h-screen overflow-hidden absolute md:relative content">
  <div style="background-image: url('{{ Vite::asset('resources/images/voi2.png') }}');" class= "bg-no-repeat bg-contain bg-top " >
    <div class="bg-transparent">
      <header>
        <nav class="flex items-center justify-between p-6 lg:px-8 z-1" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="/" wire:navigate class="-m-1.5 p-1.5 hidden sm:block z-2 ">
              <span class="text-amber-700 font-audiowide font-bold text-xl ">KSLH</span>
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
          <div class="hidden lg:flex lg:gap-x-12 z-1">
            <a href="/accommodations" wire:navigate class=" font-audiowide text-black hover:text-amber-700 transition-all ease-in-out duration-500">ngulia</a>  
            <a href="/accommodations" wire:navigate class=" font-audiowide text-black hover:text-amber-700 transition-all ease-in-out duration-500">voi</a>
            <a href="/accommodations" wire:navigate class=" font-audiowide text-black hover:text-amber-700 transition-all ease-in-out duration-500">mombassa</a> 
          </div>
          
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login" class="text-sm/6 font-audiowide  font-semibold text-gray-900 z-1 hover:text-amber-700 transition-all ease-in-out duration-500 ">log&nbsp;in <span aria-hidden="true">&rarr;</span></a>
          </div>
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <div class="lg:hidden" role="dialog" aria-modal="true">
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <div class="fixed inset-0 z-50"></div>
          <div class="fixed inset-y-0 right-0 z-50 w-full overflow-y-auto bg-white px-6 py-6 sm:max-w-sm sm:ring-1 sm:ring-gray-900/10">
            <div class="flex items-center justify-between">
              <a href="#" class="-m-1.5 p-1.5">
                <span class="text-amber-700">KSLH</span>
              </a>
              <button type="button" class="-m-2.5 rounded-md p-2.5 text-gray-700">
                <span class="sr-only">Close menu</span>
                <svg class="size-6" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" aria-hidden="true" data-slot="icon">
                  <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
                </svg>
              </button>
            </div>
            <div class="mt-6 flow-root">
              <div class="-my-6 divide-y divide-gray-500/10">
                <div class="space-y-2 py-6">
                <a href="/accommodations" wire:navigate class="hover:text-green-600 transition duration-300">Ngulia</a>  
            <a href="/accommodations" wire:navigate class="hover:text-green-600 transition duration-300">Voi</a>
            <a href="/accommodations" wire:navigate class="hover:text-green-600 transition duration-300">Mombassa</a> 
                </div>
                <div class="py-6">
                  <a href="#" class="-mx-3 block rounded-lg px-3 py-2.5 text-base/7 font-semibold text-gray-900 hover:bg-gray-50">Log in</a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </header>
      <!-- --main -->
      <div>
      <div class="relative isolate px-6 pt-14 lg:px-8">
        <div class="absolute inset-x-0 -top-40 -z-10 transform-gpu overflow-hidden blur-3xl sm:-top-80" aria-hidden="true">
          <div class="relative left-[calc(50%-11rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 rotate-[30deg] bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%-30rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
        <div class="mx-auto max-w-2xl py-32 sm:py-48 lg:py-56">
          <div class="hidden sm:mb-8 sm:flex sm:justify-center">
            @can('admin')
            <div class="relative rounded-full px-3 py-1 text-sm/6 text-gray-600 ring-1 ring-gray-900/10 hover:ring-gray-900/20">
              Administrator <a href="/accommodations/create" class="font-semibold text-yellow-600 font-audiowide "><span class="absolute inset-0" aria-hidden="true"></span>Add&nbsp;package <span aria-hidden="true">&rarr;</span></a>
            </div>
            @endcan

          </div>
          <div class="text-center">
            <h1 class="text-3xl font-semibold tracking-tight text-balance text-white sm:text-3xl antialiased ">Kenya Safari Lodges and Hotels</h1>
            <p class="mt-5 text-sm font-medium text-pretty text-white sm:text-sm">Accommodation packages that match your style</p>
            <div class="mt-10 flex items-center justify-center gap-x-6">
              <a href="/login" class="rounded-md bg-lime-600 px-3.5 py-2.5 text-sm font-semibold text-white shadow-xs hover:bg-transparent transition-all ease-in-out duration-300 focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">View packages</a>
            </div>
          </div>
        </div>
        <div class="absolute inset-x-0 top-[calc(100%-13rem)] -z-10 transform-gpu overflow-hidden blur-3xl sm:top-[calc(100%-30rem)]" aria-hidden="true">
          <div class="relative left-[calc(50%+3rem)] aspect-1155/678 w-[36.125rem] -translate-x-1/2 bg-linear-to-tr from-[#ff80b5] to-[#9089fc] opacity-30 sm:left-[calc(50%+36rem)] sm:w-[72.1875rem]" style="clip-path: polygon(74.1% 44.1%, 100% 61.6%, 97.5% 26.9%, 85.5% 0.1%, 80.7% 2%, 72.5% 32.5%, 60.2% 62.4%, 52.4% 68.1%, 47.5% 58.3%, 45.2% 34.5%, 27.5% 76.7%, 0.1% 64.9%, 17.9% 100%, 27.6% 76.8%, 76.1% 97.7%, 74.1% 44.1%)"></div>
        </div>
      </div>
    </div>
    <!-- end main -->
    </div>
  </div>
  </div>

  <script>
    $(window).on('load', function(){
      $(".loader").fadeOut(1700);
      $(".content").fadeIn(1700);
    });

  </script>

</body>
</html>

