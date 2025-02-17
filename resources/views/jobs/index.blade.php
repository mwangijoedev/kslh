
<x-layout>
    
    <div class="space-y-10">
        <section class="pt-6">
            <div class="flex flex-col text-center">
                
            <h1 class="font-bold text-4xl text-gray-700">Choose Your Style...</h1>
            <!-- <form action="">
                <input type="text" class="bg-white/10 border border-transparent hover:border-blue-800 transition-colors duration-300 rounded-xl p-3 mt-5 w-full max-w-lg" placeholder="Looking for...">   
            </form> -->

            <x-forms.form action="/search" class="mt-6 w-full">
                <x-forms.input name="q" :label="false" placeholder="Wakurugenzi Special..." />
            </x-forms.form>
            
                
            </div>
        </section>

        <section class="mt-6">
            <x-section-heading>Featured Merch</x-section-heading>
                <div class=" grid lg:grid-cols-3 gap-8 mt-6">
                    @foreach ($featuredjobs as $job) 
                        <x-job-card :$job/>
                    @endforeach
                </div>
                
        </section>

        <section>
            <x-section-heading>Tags</x-section-heading>
                <div class="space-x-1 mt-6">
                    @foreach ($tags as $tag) 
                        <x-tag :$tag/>
                    @endforeach                                        
                </div>
        </section>

        <section>
            <x-section-heading>Recent Jobs</x-section-heading>

            <div class="space-y-6 mt-6">
                @foreach ($jobs as $job) 
                    <x-job-card-wide :$job/>
                @endforeach
            </div>

        </section>

    </div>
</x-layout>