@props(['error'])

@if ($errors->has($error))
    <p class="text-sm font-bold text-red-700">
        {{ $errors->first($error) }}
    </p>
@endif
