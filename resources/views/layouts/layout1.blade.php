
<!DOCTYPE html>
<html>
<head>
    <title>KSLH Applicaton</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
<!-- #region -->
    <script src="https://code.jquery.com/jquery-3.7.1.js" integrity="sha256-eKhayi8LEQwp4NKxN+CfCh+3qOVUtJn3QNZ0TciWLP4=" crossorigin="anonymous"></script>
    
</head>
<body>
  <div class="loader bg-lime-950 flex flex-cols justify-center items-center ">
    <p class=" font-audiowide text-sm md:text-4xl animate-pulse text-amber-700 text-center ">KSLH</p>
  </div>
<div class="h-screen relative top-0 left-0 bottom-0 right-0 md:relative overflow-hidden content ">
  <div>
    <div class="bg-transparent">
      <header>
        <nav class=" absolute top-0 right-0 left-0 glass flex items-center justify-between p-4 lg:px-8 rounded-sm z-4" aria-label="Global">
          <div class="flex lg:flex-1">
            <a href="/" wire:navigate class="-m-1.5 p-1.5 hidden sm:block z-1 ">
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
            <a href="/accommodations" wire:navigate class=" font-audiowide text-black hover:text-amber-700 hover:scale-101 transition-all ease-in-out duration-200 ">ngulia</a>  
            <a href="/accommodations" wire:navigate class=" font-audiowide text-black hover:text-amber-700 transition-all ease-in-out duration-200">voi</a>
            <a href="/accommodations" wire:navigate class=" font-audiowide text-black hover:text-amber-700 transition-all ease-in-out duration-200">mombasa</a> 
          </div>
          @guest
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="/login" class="text-sm/6 font-audiowide font-semibold text-gray-900 z-1 hover:text-amber-700 transition-all ease-in-out duration-500 ">log&nbsp;in <span aria-hidden="true">&rarr;</span></a>
          </div>
          @endguest
          @auth
          <div class="hidden lg:flex lg:flex-1 lg:justify-end">
            <a href="" class="text-sm/6 font-audiowide font-semibold text-gray-900 z-1 hover:text-amber-700 transition-all ease-in-out duration-500 ">{{ Auth::user()->name;}}<span aria-hidden="true">&rarr;</span></a>
          </div>
          @endauth
          
        </nav>
        <!-- Mobile menu, show/hide based on menu open state. -->
        <!-- <div class="lg:hidden" role="dialog" aria-modal="true"> -->
          <!-- Background backdrop, show/hide based on slide-over state. -->
          <!-- <div class="fixed inset-0 z-50"></div>
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
        </div> -->
      </header>
        <main class="relative" >
            {{  $slot  }}
        </main>   
    </div>
  </div>
  </div>

  <script>
    $(window).on('load', function(){
      $(".loader").fadeOut(3000);
      $(".content").fadeIn(3000);
    });

  </script>

</body>
</html>

