<x-app-layout>
    <div id="myTabContent" class="flex grow sm:ml-16">
        <div class="flex flex-col md:flex-row gap-y-4 md:gap-y-0 gap-x-4 p-4 justify-between items-center">
            <div class="grid gap-x-4 gap-y-4 md:w-2/5 w-full sm:w-4/5">
                <div class="flex flex-col">
                    <p class="text-gray-500">{{ $spell->level->level_name === 0 ? 'Tour de magie' : "Level {$spell->level->level_name}" }}
                    </p>
                    <hr class="border border-t-gray-500">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Niveau</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-gray-500">{{ $spell->school }}</p>
                    <hr class="border border-t-gray-500">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">École</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-gray-500">{{ $spell->cast_time }}</p>
                    <hr class="border border-t-gray-500">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Temps d'incantation</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-gray-500">{{ $spell->range }}</p>
                    <hr class="border border-t-gray-500">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Portée</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-gray-500">{{ $spell->component }}</p>
                    <hr class="border border-t-gray-500">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Composantes</p>
                </div>
                <div class="flex flex-col">
                    <p class="text-gray-500">{{ $spell->duration }}</p>
                    <hr class="border border-t-gray-500">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Durée</p>
                </div>
            </div>
            <div class="md:w-1/2 w-full">
                <div id="grid-2col" class="grid justify-center gap-y-4">
                    <div class="justify-self-center">
                        <p class="text-gray-800 text-center">
                            <span>{{ $spell->description }}</span>
                        </p>
                        <p class="font-titleMiddleAge text-center text-base md:text-xl text-red-900">Description</p>
                    </div>
                </div>
            </div>
        </div>
        <hr class="border border-gray-300 my-4">
    </div>
</x-app-layout>
