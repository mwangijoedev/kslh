@props(['amenities','deals','assets','hotelranks','styles', 'title'])

@php
    
@endphp
<div class="p-5">
    <p class="border-b border-green-400 text-2xl text-center font-bold text-gray-400 ">{{$title}}</p>
    <ul>
    @foreach ($amenities as $amenitie)
        <li class="text-lg">{{$amenitie->name}}</li>
    @endforeach
    </ul>
</div>