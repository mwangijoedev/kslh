<x-layout1>
  <div class="relative w-full min-h-screen bg-gray-950 text-white overflow-hidden">
    <!-- Hero Section -->
    <div class="relative h-screen flex items-center justify-center">
      <!-- Background Image -->
      <div class="absolute inset-0 z-0">
        <img src="{{ Vite::asset("resources/images/safari.jpg") }}" alt="Beach Resort" class="w-full h-full object-cover opacity-60" />
        <div class="absolute inset-0 bg-gradient-to-b from-black/80 to-blue-950/70"></div>
      </div>

      <!-- Content -->
      <div class="relative z-10 max-w-4xl px-6 text-center md:text-left">
        <h1 class="text-4xl md:text-6xl font-audiowide font-extrabold text-white leading-tight mb-4 drop-shadow-lg">
          Discover Paradise with KSLH
        </h1>
        <p class="text-lg md:text-xl text-gray-200 mb-6 max-w-xl mx-auto md:mx-0">
          From the shores of the Indian Ocean to the heart of Kenya’s national parks, find your perfect escape with Kenya Safari Lodges and Hotels.
        </p>
        <a href="/register"
          class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full shadow-lg transition duration-300">
          Book Your Getaway
        </a>
      </div>
    </div>

    <!-- Features / Highlights -->
    <section class="bg-gray-950 py-12 px-6 md:px-12 text-center grid gap-10 md:grid-cols-3">
      <div>
        <img src="{{ Vite::asset("resources/images/safari.jpg") }}" alt="Beachfront" class="mx-auto h-12 mb-4" />
        <h3 class="text-xl font-semibold text-blue-400 mb-2">Breathtaking Beachfronts</h3>
        <p class="text-sm text-gray-300">Wake up to ocean waves in our iconic Mombasa properties.</p>
      </div>
      <div>
        <img src="{{ Vite::asset("resources/images/safari.jpg") }}" alt="Safari" class="mx-auto h-12 mb-4" />
        <h3 class="text-xl font-semibold text-blue-400 mb-2">Immersive Safaris</h3>
        <p class="text-sm text-gray-300">Stay close to nature in our luxurious lodges near national parks.</p>
      </div>
      <div>
        <img src="{{ Vite::asset("resources/images/safari.jpg") }}" alt="Relaxation" class="mx-auto h-12 mb-4" />
        <h3 class="text-xl font-semibold text-blue-400 mb-2">World-Class Hospitality</h3>
        <p class="text-sm text-gray-300">Enjoy fine dining, entertainment, and service that feels like home.</p>
      </div>
      
    </section>

    <!-- Final CTA -->
    <section class="bg-gray-950 text-center py-12 px-6">
      <h2 class="text-3xl font-bold text-white mb-4">Ready for your dream holiday?</h2>
      <p class="text-gray-300 mb-6">Explore our destinations and secure your stay now — the adventure of a lifetime awaits.</p>
      <a href="/register"
        class="inline-block bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-full transition duration-300">
        Get Started
      </a>
    </section>
  </div>
</x-layout1>



