@props(['title', 'tooltip', 'id', 'tabs', 'controls'])

<button class="flex p-3 rounded-t-lg" id="{{ $id }}" data-tooltip-target="{{ $tooltip }}" data-tabs-target="{{ $tabs }}" aria-controls="{{ $controls }}" data-tooltip-placement="right" role="tab" aria-selected="false">
    {{ $slot }}
    <span class="ml-3 whitespace-nowrap sm:hidden">{{ $title }}</span>
</button>
<div id="{{ $tooltip }}" role="tooltip" class="absolute z-10 invisible hidden sm:inline-block px-3 py-2 text-sm font-medium text-white bg-gray-800 rounded-lg shadow-sm opacity-0 truncate tooltip">
    {{ $title }}
    <div class="tooltip-arrow" data-popper-arrow></div>
</div>
