<x-layout>
    <div class="p-4 mb-10 w-full h-full bg-white/60 rounded-md border border-transparent 
     hover:border-blue-600 hover:bg-white/5 transition-all duration-700 group">
        <div class="flex-col items-center">
            <div>
                <div class="font-bold text-gray-700 text-4xl mb-4">
                    <p>{{$user->employer->name}}</p>
                </div>
                <div>
                    <x-employer-logo :employer="$user->employer" size="max"/>
                </div>
                
            </div>
            <div class="text-black group-hover:text-white transition-all duration-700">
                <div class="mt-5 font-bold ">Your Details:</div>
                <div class="border p-3 mt-3 bg-white/10 rounded-md ">Name: {{$user->name}}</div>
                <div class="border p-3 mt-3 bg-white/10 rounded-md">Email: {{$user->email}}</div>
                <div class="border p-3 mt-3 bg-white/10 rounded-md">Employer: {{$user->employer->name}}</div>
               
            </div>
            </div>
        <x-button class="mt-5" ><a href="/profile/{{$user->id}}/edit">Edit</a></x-button>
    </div>

    <div>
        <p class="font-bold text-xl text-gray-700">Posted Jobs: </p>
    </div>
    @foreach ($user->employer->job as $job)
        <x-job-card-wide :$job/>
    @endforeach
</x-layout>