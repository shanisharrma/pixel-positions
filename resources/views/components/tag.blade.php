@props(['tag', 'size' => 'base'])

@php

    $cssClasses = 'bg-white/10 rounded-xl font-bold hover:bg-white/25 transition-colors duration-200';
    if ($size === 'base') {
        $cssClasses .= ' px-5 py-1 text-sm';
    } elseif ($size === 'small') {
        $cssClasses .= ' px-2.5 py-1 text-2xs';
    }
@endphp

<a href="/tags/{{ strtolower($tag->name) }}" class="{{ $cssClasses }}">
    {{ $tag->name }}
</a>
