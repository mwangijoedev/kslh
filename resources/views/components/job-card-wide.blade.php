@props(['tag','job'])
<a href="/jobs/{{$job->id}}">
<x-job-panel class="gap-x-6">
    <x-employer-logo :employer="$job->employer"/>   

    <div class="font-bold flex-1 flex flex-col">

        <a href="#" class="self-start text-sm text-gray-400">{{$job->employer->name}}</a>

        <a href="{{$job->url}}" target="__blank"><h1 class="font-bold text-xl mt-3 group-hover:text-blue-600 transition-colors duration-500 font-bold">{{$job->title}}</h1></a>
        <p class="text-sm text-gray-400 mt-auto">{{$job->salary}}</p>
    </div>
    
    <div class="font-bold">
            <x-edit-button :$job size="base"/>
            @foreach ($job->tags as $tag) 
                <x-tag :$tag />
            @endforeach                
                     
    </div> 

</x-job-panel>
</a>
