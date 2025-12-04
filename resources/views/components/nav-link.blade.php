@props(['href', 'current' => false])

@php
    $classes = $current ? 'text-zinc-900 hover:text-zinc-700' : 'text-white hover:text-gray-600 hover:text-gray-400';
@endphp

<a {{ $attributes->merge(['class' => 'font-medium ' . $classes]) }} href={{ $href }}>
    {{ $slot }}
</a>
