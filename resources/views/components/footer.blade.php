@props(['bottom'])

@php
$classe = ($bottom ?? false)
            ? 'absolute bottom-0 sm:relative lg:absolute lg:bottom:0 w-full'
            : '';
@endphp

<footer {{ $attributes->merge(['class' => $classe]) }}>
    {{ $slot }}
</footer>
