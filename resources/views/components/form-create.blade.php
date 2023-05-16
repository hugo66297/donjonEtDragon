@props(['title', 'route'])

<div class="p-4 text-center sm:text-left">
    <a
        class="text-center inline-flex items-center py-1 sm:py-2 px-3 gap-x-1 font-bold text-red-800 rounded-full border-2 border-red-800 hover:bg-red-800 hover:text-white"
        href="{{route('create.options')}}"
    >
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
            <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
        </svg>
        Retour
    </a>
    <h2 class="p-2 text-3xl text-center text-red-800 font-normalMedieval">
        {{$title}}
    </h2>
</div>

<form action="{{route($route)}}" method="post" class="w-4/5 ml-[10%] space-y-8 mb-8">
    @csrf
    {{ $slot }}
    <div class="text-center">
        <button id="" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer">
            Terminer
        </button>
    </div>
</form>
