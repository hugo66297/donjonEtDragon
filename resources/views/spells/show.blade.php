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
    <div id="myTabContent" class="px-2 py-2 sm:px-8">
        <section>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Tags :</p>
                    <div class="text-gray-500 flex items-center mt-1 gap-x-2">
                        @foreach($spell->tags as $tag)
                            <img
                                data-tooltip-target="tooltip-{{ $tag->name }}"
                                class="w-6 h-6"
                                src="{{ asset($tag->tag_path) }}"
                                alt=""
                            />
                            <div
                                id="tooltip-{{ $tag->name }}"
                                role="tooltip"
                                class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip"
                            >
                                {{ $tag->name }}
                                <div class="tooltip-arrow" data-popper-arrow></div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <hr class="border border-t-gray-500">
            </div>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Niveau :</p>
                    <p class="text-gray-500">
                        {{ $spell->level->level_name === 0 ? 'Tour de magie' : "Level {$spell->level->level_name}" }}
                    </p>
                </div>
                <hr class="border border-t-gray-500">
            </div>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">École :</p>
                    <p class="text-gray-500">{{ $spell->school->name }}</p>
                </div>
                <hr class="border border-t-gray-500">
            </div>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Classes :</p>
                    <p class="text-gray-500">@foreach($spell->categories as $category){{ $category->name }} @endforeach</p>
                </div>
                <hr class="border border-t-gray-500">
            </div>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Temps d'incantation :</p>
                    <p class="text-gray-500">{{ $spell->cast_time }}</p>
                </div>
                <hr class="border border-t-gray-500">
            </div>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Portée :</p>
                    <p class="text-gray-500">{{ $spell->range }}</p>
                </div>
                <hr class="border border-t-gray-500">
            </div>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Composantes :</p>
                    <p class="text-gray-500">{{ $spell->component }}</p>
                </div>
                <hr class="border border-t-gray-500">
            </div>
            <div class="py-2">
                <div class="sm:flex sm:items-center sm:space-x-2">
                    <p class="font-titleMiddleAge md:text-xl text-red-900">Durée :</p>
                    <p class="text-gray-500">{{ $spell->duration }}</p>
                </div>
                <hr class="border border-t-gray-500">
            </div>
        </section>
        <div class="justify-self-center">
                <p class="font-titleMiddleAge text-center text-base md:text-xl text-red-900">Description</p>
                <div class="text-gray-800 text-justify space-y-2">
                    {!! $spell->description !!}
                </div>
            </div>
        @if($spell->upper_level)
            <div class="w-full">
                <div class="justify-self-center">
                    <p class="font-titleMiddleAge text-center text-base md:text-xl text-red-900">Upper level</p>
                    <p class="text-gray-800 text-justify space-y-5">
                        <span>{!! $spell->upper_level !!}</span>
                    </p>
                </div>
            </div>
        @endif
    </div>
</x-app-layout>
