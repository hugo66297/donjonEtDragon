@props(['peer' => false])

@php
    $classes = ($peer)
        ? 'absolute font-titleMiddleAge text-gray-500 duration-300 transform -translate-y-5 scale-75 top-2 z-10 origin-[0] bg-white px-2 bg-[#f8f8f8] peer-focus:px-2 peer-focus:text-red-800 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-5 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 left-1'
        : '';
@endphp

@if($label && !$peer)
    <x-input-label :for="$id" :value="$label" class="font-medium text-red-800 font-titleMiddleAge" {{ $attributes->merge(['class' => $classes]) }} />
@endif

@if($type === 'textarea')
    <textarea
        id="{{$id}}"
        class="block w-full text-sm rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-800 focus:ring-inset"
        name="{{$name}}"
        rows="4"
        placeholder="{{$placeholder}}"
    >{{$value}}</textarea>
@else
    <input
        id="{{$id}}"
        class="block w-full text-sm rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-800 focus:ring-inset {{$peer ? 'peer' : ''}}"
        type="{{$type}}"
        name="{{$name}}"
        placeholder="{{$placeholder}}"
        value="{{$value}}"
    />
@endif

@if($label && $peer)
    <x-input-label :for="$id" :value="$label" class="font-medium text-red-800 font-titleMiddleAge" {{ $attributes->merge(['class' => $classes]) }} />
@endif
