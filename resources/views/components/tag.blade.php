@props([
    'size' => 'base'
])

@php
    $classes= "bg-primary/20 hover:bg-primary/35 rounded-xl";

    if($size ==='base'){
        $classes .= " px-5 py-1 text-sm";
    }

    if ($size === 'small') {
        $classes .= " px-3 py-1 text-xs";
    }
@endphp

<a href="#" class="{{ $classes }}">{{ $slot}}</a>