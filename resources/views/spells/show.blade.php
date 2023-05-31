<x-app-layout>
    <div class="p-4 text-center sm:text-left">
        <a
            class="text-center inline-flex items-center py-1 sm:py-2 px-3 gap-x-1 font-bold text-red-800 rounded-full border-2 border-red-800 hover:bg-red-800 hover:text-white"
            href="{{route('spells.index', ['page' => session('previous_page')])}}"
        >
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
            </svg>
            Retour
        </a>
        <h1 class="p-2 font-titleMiddleAge text-center underline underline-offset-2 tracking-wide text-red-900 text-4xl">
            {{$spell->name}} :
        </h1>
    </div>
    <div id="myTabContent" class="flex grow px-16">
        <div class="flex flex-col md:flex-row md:gap-y-0 gap-x-16 p-4 justify-between items-center">
            <div class="grid gap-y-7 w-full">
                <div class="flex flex-col gap-y-2">
                    <div class="flex gap-x-4 items-center">
                        <p class="font-titleMiddleAge md:text-xl text-red-900">Niveau :</p>
                        <p class="text-gray-500">{{ $spell->level->level_name === 0 ? 'Tour de magie' : "Level {$spell->level->level_name}" }}
                        </p>
                    </div>
                    <hr class="border border-t-gray-500">
                </div>
                <div class="flex flex-col gap-y-2">
                    <div class="flex gap-x-4 items-center">
                        <p class="font-titleMiddleAge md:text-xl text-red-900">École :</p>
                        <p class="text-gray-500">{{ $spell->school->name }}</p>
                    </div>
                    <hr class="border border-t-gray-500">
                </div>
                <div class="flex flex-col gap-y-2">
                    <div class="flex gap-x-4 items-center">
                        <p class="font-titleMiddleAge md:text-xl text-red-900">Temps d'incantation :</p>
                        <p class="text-gray-500">{{ $spell->cast_time }}</p>
                    </div>
                    <hr class="border border-t-gray-500">
                </div>
                <div class="flex flex-col gap-y-2">
                    <div class="flex gap-x-4 items-center">
                        <p class="font-titleMiddleAge md:text-xl text-red-900">Portée :</p>
                        <p class="text-gray-500">{{ $spell->range }}</p>
                    </div>
                    <hr class="border border-t-gray-500">
                </div>
                <div class="flex flex-col gap-y-2">
                    <div class="flex gap-x-4 items-center">
                        <p class="font-titleMiddleAge md:text-xl text-red-900">Composantes :</p>
                        <p class="text-gray-500">{{ $spell->component }}</p>
                    </div>
                    <hr class="border border-t-gray-500">
                </div>
                <div class="flex flex-col gap-y-2">
                    <div class="flex gap-x-4 items-center">
                        <p class="font-titleMiddleAge md:text-xl text-red-900">Durée :</p>
                        <p class="text-gray-500">{{ $spell->duration }}</p>
                    </div>
                    <hr class="border border-t-gray-500">
                </div>
            </div>
            <div class="w-full">
                <div class="justify-self-center">
                    <p class="text-gray-800 text-justify">
                        <span>{{ $spell->description }}</span>
                    </p>
                    <p class="font-titleMiddleAge text-center text-base md:text-xl text-red-900">Description</p>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
