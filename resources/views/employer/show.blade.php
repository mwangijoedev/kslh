
<x-layout>
    <x-page-heading>Employers</x-page-heading>

    
    <div class="space-x-6">
        @foreach ($employers as $employer)
            <x-employer-card :$employer />
            <x-forms.divider/>
        @endforeach
    </div>
    <x-forms.divider/>

  


</x-layout>
