@props(['label','name'])

<div>
    @if ($label)
        <x-forms.label :$label :$name/>
    @endif

    <div class="mt-1">
        {{$slot}}

        <x-forms.error :error={{$errors->first($name)}}/>
        
    </div>
</div>