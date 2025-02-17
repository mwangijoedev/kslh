@props(['ticket'])

<div>
<a href="/jobs/{{$ticket->name}}">
<x-job-panel class="flex-col text-center">    
    <div class="self-start text-sm text-gray-400">{{$ticket->name}}</div>
    <div class="py-8">
        
        <a href="/showtickets" target="__blank"><h1 class="group-hover:text-blue-600 transition-color duration-500 text-xl font-bold">{{$ticket->description}}</h1></a>
        
        <p class="mt-4 text-sm">{{$ticket->name}}</p>
    </div>
    <div class="flex justify-between items-center mt-auto">
        <div>
                      
        </div>
        <div>
            <a href="">
                <x-employer-logo :$ticket :width="100"/>
            </a> 
        </div>                 
    </div>
</x-job-panel>
</a>
</div>


