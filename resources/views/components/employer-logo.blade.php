@props(['ticket','size'=>'base'])
@php
    if($size==='base'){
        $width = 90;
        
    }

    if($size==='max'){
        $width = 250;
    }
    
@endphp

<div style="background-image: url('{{ asset($ticket->path)}}');" class="w-full h-[100px] bg-cover border border-transparent bg-center rounded-lg p-20 group-hover:border-blue-700 " >
    <!-- <img src="http://picsum.photos/seed/{{rand(0,100000)}}/{{$width}}" alt="Image" class="rounded-xl">
    <img src="{{asset('resources/images/p3.png')}}" alt="Image" class="rounded-xl" width="{{$width}}"> -->

</div> 
