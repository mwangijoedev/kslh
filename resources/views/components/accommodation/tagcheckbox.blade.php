@props(['titles','header'])

@php
    $titles  = explode(' ', $titles);
@endphp

<div class="m-4 text-lg">
    <p class="text-green-600">{{$header}}</p>
    @foreach ($titles as $title)
        <fieldset>
            <label for="{{$title}}" class="mt-4 text-gray-600">{{$title}}</label>
            <input type="checkbox" name="{{$title}}" value="{{$title.",".$header}}">
        </fieldset>
    @endforeach
</div>