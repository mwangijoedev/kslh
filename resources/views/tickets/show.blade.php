@props(['tickets'])
<x-layout2>
     <header class="m-10">
            <h2 class="text-4xl font-bold text-green-600 ">Get yourself a ticket Ufrahiee!</h2>
            <p class="mt-4 text-gray-600">From Draco to you !</p>
        </header>
    <div class="grid grid-cols-1 medium2:grid-cols-4 gap-12 ">
        @foreach ($tickets as $ticket )
           <x-job-card :$ticket ></x-job-card>
        @endforeach
      
    </div>
</x-layout2>