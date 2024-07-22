@php
    $cssClasses =
        'p-4 bg-white/5 rounded-xl border border-transparent hover:border-blue-800 group transition-colors duration-200';
@endphp

<div {{ $attributes(['class' => $cssClasses]) }}>
    {{ $slot }}
</div>
