@props(['title', 'route'])

<h2 class="text-3xl text-center p-4 text-red-900 font-normalMedieval">
    {{$title}}
</h2>

<form action="{{route($route)}}" method="post" class="w-4/5 ml-[10%] space-y-8 mb-8">
    @csrf
    {{ $slot }}
    <div class="text-center">
        <button id="" class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer">
            Terminer
        </button>
    </div>
</form>
