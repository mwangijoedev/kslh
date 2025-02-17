@props(['employer'])

<x-job-panel class="gap-x-6">
    <x-employer-logo :employer="$employer"/>   

    <div class="font-bold flex-1 flex flex-col">

        <a href="#" class="self-start text-sm text-gray-400">{{$employer->name}}</a>

        
        <p class="text-sm text-gray-400 mt-auto">{{$employer->user->name}}</p>
    </div>
    
  

</x-job-panel>

