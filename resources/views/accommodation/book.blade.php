<x-layout2>
<header class="">
    <h2 class="text-4xl font-bold text-green-600 ">{{$accommodation->title}}</h2>
    <p class="mt-4 text-gray-600">From Draco to you !</p>
</header>

<section class=" h-screen flex flex-row sm:flex-col p-10 sm:space-y-4 xs:flex-col lg:flex-row lg:space-x-3 mt-20 mb-20 bg-cover bg-center transition-all duration-500 ease-in-out "
style="background-image: url('{{asset($accommodation->photo)}}');" >   
     <x-accommodation.display-wide :$accommodation bg="black" booking="true" hover_bg="black" opacity="100" />
</section>                   
</x-layout2>
