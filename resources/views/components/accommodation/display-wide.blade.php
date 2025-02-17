@props(['accommodation', 'bg', 'booking', 'hover_bg','opacity'])
@php
$assets = $accommodation->assets;
$amenities = $accommodation->amenities;
$rank = $accommodation->hotelranks;
$styles = $accommodation->style;
@endphp
<div class=" xs:flex-col md:flex-row xs:overflow-scroll md:overflow-hidden bg-{{$bg}} mt-10 w-full p-10 h-auto lg:max-h-[400px] flex items-center justify-around rounded-xl border border-gray-600 hover:border-blue-500 hover:bg-{{$hover_bg}} hover:bg-opacity-{{$opacity}} transition-all duration-500 ease-in-out group ">
    <div id="image" 
        class="inline-flex px-[100px] py-[100px] bg-cover bg-center rounded-lg overflow-hidden group-hover:shadow-2xl group-hover:shadow-[black] transition-all duration-500 ease-in-out"
        style="background-image: url('{{asset($accommodation->photo)}}');" >                        
    </div>
    <div class="p-4 flex flex-col border-r border-green-600">
        <div class=" px-[20px] rounded-xl text-2xl font-bold text-gray-700 group-hover:shadow-lg group-hover:shadow-[black] transition-all duration-500 ease-in-out " id="name" >
            <p>{{$accommodation->title}}</p>
        </div>
        <div class="flex flex-col p-4 text-green-400 group-hover:font-bold ">
            <p class="text-sm" >{{$accommodation->Location}}</p>
            <p>{{$accommodation->cost}}</p>
        </div>
        @if ($booking === 'true')
        <form action="/book/{{$accommodation->id}}" method="POST">
            @csrf        
            <button class="bg-green-700 self-end text-black px-[30px] text-center rounded-lg hover:scale-110 hover:bg-green-400 transition-all duration-500 ease-in-out " type="submit">
                Book Service 
            </button> 
        </form>
        @endif

        @if ($booking !== 'true')
            <form action="/book/{{$accommodation->id}}" method="GET">
                @csrf
                <button class="bg-green-700 self-end text-black px-[30px] text-center rounded-lg hover:scale-110 hover:bg-green-400 transition-all duration-500 ease-in-out" type="submit" >
                   View Details
                </button>    
            </form>
        @endif             
        
    </div>
    @if ($assets !== null)
    <div class="p-4 flex flex-col border-r border-green-600">
    
        <p class="text-white">Properties</p>
            @foreach ($assets as $asset)
                <div class=" px-[20px] rounded-xl text-md font-bold text-gray-700 group-hover:text-green-400 transition-all duration-500 ease-in-out ">
                    <p>{{$asset->name}}</p>
                </div>
            @endforeach
    
    </div> 
    @endif      

     @if ($amenities !== null)
        <div class="p-4 flex flex-col border-r border-green-600">
        
            <p class="text-white">Amenities</p>
                @foreach ($amenities as $amenitie)
                    <div class=" px-[20px] rounded-xl text-md font-bold text-gray-700 group-hover:text-green-400 transition-all duration-500 ease-in-out ">
                        <p>{{$amenitie->name}}</p>
                    </div>
                @endforeach
        
        </div>
    @endif        

    @if ($styles !== null)
    <div class="p-4 flex flex-col border-r border-green-600">     
        <p class="text-white">Style</p>
            @foreach ($styles as $style)
                <div class=" px-[20px] rounded-xl text-md font-bold text-gray-700 group-hover:text-green-400 transition-all duration-500 ease-in-out ">
                    <p>{{$style->name}}</p>
                </div>
            @endforeach
       
    </div>
    @endif        
</div>