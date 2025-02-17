@props(['tag','size'=>'base'])

@php
    $classes ='bg-white/10 rounded-xl py-1 font-bold hover:bg-white/25 transition-color duration-300';

    if($size === 'small'){
        $classes .= ' px-3 text-2xs ';
    }
    if($size === 'base'){
        $classes .= ' px-5 text-md ';
    }
@endphp
<a href="/tags/{{$tag->name}}" class="{{$classes}}">{{$tag->name}}</a>                
