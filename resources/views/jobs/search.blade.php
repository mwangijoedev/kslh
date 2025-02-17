<x-layout>
    <div class="space-y-10">
        <section class="pt-6">
            <div class="flex flex-col text-center">
                
            <h1 class="font-bold text-4xl text-gray-700">Let's Find Your Next Job</h1>
            <!-- <form action="">
                <input type="text" class="bg-white/10 border border-transparent hover:border-blue-800 transition-colors duration-300 rounded-xl p-3 mt-5 w-full max-w-lg" placeholder="Looking for...">   
            </form> -->

            <x-forms.form action="/search" class="mt-6 w-full">
                <x-forms.input name="q" :label="false" placeholder="Web Developer..." />
            </x-forms.form>
            
                
            </div>
        </section>



        <section>
            <x-section-heading>Your Results</x-section-heading>

            <div class="space-y-6 mt-6">
                @if (count($jobs)==0)
                <p class="font-bold text-4xl text-red-500"> Opps! Try Something Else...</p>
                
                @endif
                @foreach ($jobs as $job) 
                    <x-job-card-wide :$job/>
                @endforeach                
            </div>

        </section>

        
    </div>
</x-layout>