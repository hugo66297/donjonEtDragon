@props(['label' => ''])

@if($label)
    <label for="{{ $name }}" class="block text-lg font-medium text-red-800 font-titleMiddleAge">
        {{ $label }}
    </label>
@endif

<textarea
    x-data
    x-init="new EasyMDE({ element: $el {{ $jsonOptions() }} })"
    name="{{ $name }}"
    id="{{ $id }}"
    {{ $attributes }}
>{{ old($transformName(), $slot) }}</textarea>
