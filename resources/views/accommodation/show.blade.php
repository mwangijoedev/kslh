<x-layout2>
    @foreach ($accommodations as $accommodation)
        <x-accommodation.display-wide :$accommodation bg="transparent" booking=" " hover_bg="white" opacity="10" />
    @endforeach
</x-layout2>