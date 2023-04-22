<x-app-layout>
    <h1 class="font-titleMiddleAge text-center underline underline-offset-2 tracking-wide text-red-900 text-4xl p-4">
        {{$spell->name}} :
    </h1>
    <div id="myTabContent" class="flex grow px-16">
        <div class="flex flex-col md:flex-row md:gap-y-0 gap-x-16 p-4 justify-between items-center">
            <div class="grid gap-y-7 md:w-2/5 w-full sm:w-4/5">
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
                        <p class="text-gray-500">{{ $spell->school }}</p>
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
