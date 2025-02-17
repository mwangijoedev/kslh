@props(['label', 'name'])

@php
    $defaults = [
        'type'=>'text',
        'id'=>$name,
        'name'=>$name,
        'class'=>'rounded-xl bg-white/10  px-5 py-4 w-full border border-transparent hover:border-blue-800 transition-colors duration-500',
        'value'=>old($name)
    ]
@endphp

<x-forms.field :$label :$name>
    <input {{$attributes($defaults)}}>

    
                        
    <x-forms.error :$name />
            
         
</x-forms.field>