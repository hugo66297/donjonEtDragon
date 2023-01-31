@props(['title', 'id', 'ariaLabel'])

<div class="hidden p-4 bg-[#e7e7db]/[.2] m-2 sm:m-0 rounded-lg md:rounded-none grow" id="{{$id}}" role="tabpanel" aria-labelledby="{{$ariaLabel}}">
    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-400 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
        <svg class="w-7 h-7" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path clip-rule="evenodd" fill-rule="evenodd" d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z"></path>
        </svg>
    </button>
    <h2 class="text-center mb-8 text-2xl text-red-900 font-normalMedieval underline underline-offset-2 tracking-wide sm:text-3xl lg:text-4xl">
        {{$title}}
    </h2>
    {{ $slot }}
</div>
