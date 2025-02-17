
<x-layout>
    <x-page-heading>Tags</x-page-heading>

    
    <div class="space-x-6 flex justify-center sm:flex">
        @foreach ($tags as $tag)
            <div class="">
            <x-job-panel>{{$tag->name}}</x-job-panel>
            </div>        
        @endforeach
    </div>
  

  


</x-layout>
