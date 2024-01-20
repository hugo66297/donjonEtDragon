<div class="relative flex flex-col flex-1" x-data="{ open: false }">
        <div class="flex flex-col justify-center items-center p-2 sm:px-8">
            <div class="w-full">
                <label for="simple-search" class="">Search</label>
                <div class="relative w-full">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor"
                             viewBox="0 0 20 20">
                            <path fill-rule="evenodd"
                                  d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z"
                                  clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <div class="flex items-center justify-center space-x-2">
                        <input
                            name="query"
                            id="simple-search"
                            wire:model.debounce.300ms="search"
                            type="search"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5"
                            placeholder="Search"
                        >
                        <button @click="open = !open" class="p-2.5 hover:bg-gray-200 rounded">
                            <i class="fa-solid fa-filter relative z-40"></i>
                            <span
                                class="absolute -top-2 -right-2 bg-red-700 text-white rounded-full h-5 w-5">{{ count($filters) }}</span>
                        </button>
                    </div>
                </div>
            </div>
            <div
                x-show="open"
                class="w-full space-y-2 mt-2"
            >
                <div>
                    <label for="simple-search" class="">École de magie</label>
                    <div class="relative w-full">
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            wire:model="selectSchool"
                        >
                            <option value="">Choisis une école de magie</option>
                            @foreach($schools as $school)
                                <option value="{{ $school->getKey() }}">{{ $school->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div>
                    <label for="simple-search" class="">Catégories</label>
                    <div class="relative w-full">
                        <select
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"
                            wire:model="selectCategory"
                        >
                            <option value="">Choisis une catégorie</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->getKey() }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="grid grid-cols-3 gap-x-8">
                    <div class="flex flex-col items-center justify-center space-x-2 col-span-2">
                        <div class="w-full">
                            <label for="simple-search" class="">Niveau</label>
                            <div class="my-2 relative">
                                <input
                                    type="range"
                                    wire:model="lowerValue"
                                    min="{{ $range['min'] }}"
                                    max="{{ $range['max'] }}"
                                    step="1"
                                    id="slider-lower-value"
                                    class="w-full h-1"
                                    oninput="checkLowerValue(this, 'slider-upper-value')"
                                >
                                <input
                                    type="range"
                                    wire:model="upperValue"
                                    min="{{ $range['min'] }}"
                                    max="{{ $range['max'] }}"
                                    step="1"
                                    id="slider-upper-value"
                                    class="w-full h-1"
                                    oninput="checkUpperValue(this, 'slider-lower-value')"
                                >
                            </div>
                            <div class="flex items-center justify-between pt-3">
                                <p>Min: {{ $range['values'][0] ?? '' }}</p>
                                <p>Max: {{ $range['values'][1] ?? '' }}</p>
                            </div>
                        </div>
                    </div>
                    <div class="flex items-center">
                        <input
                            id="bordered-checkbox-2"
                            type="checkbox"
                            value=""
                            class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded focus:ring-blue-500 focus:ring-2"
                            wire:model="isRituel"
                        >
                        <label for="bordered-checkbox-2" class="w-full ml-2 text-sm font-medium text-gray-900">Rituel
                            ?</label>
                    </div>
                </div>
            </div>
        </div>

        <ul
            role="list"
            class="px-2 pb-2 sm:px-8 sm:grid sm:gap-2 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 xl:grid-cols-5"
        >
            @foreach($spells as $spell)
                <div class="hidden sm:block flip-card min-h-[20rem]">
                    <div class="flip-card-inner" :key="{{ $spell->getKey() }}">
                        <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                            <div class="flex justify-between p-2">
                                <div class="">
                                    <span
                                        class="text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded"
                                        style="color: {{ $spell->level->text_color }}; background-color: {{ $spell->level->background_color }}"
                                    >
                                        {{ $spell->level->level_name === 0 ? 'Tour de magie' : "Level {$spell->level->level_name}" }}
                                    </span>
                                </div>
                            </div>
                            <div class="flex items-center text-lg font-titleMiddleAge text-slate-100 p-2">
                                <p class="grow">
                                    {{ $spell->name }}
                                </p>
                            </div>
                            <dl class="grid grid-cols-1 gap-x-2 gap-y-6 text-gray-900 p-2">
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="text-sm text-slate-100 font-weight-bold">
                                        {{ $spell->school->name }}
                                    </dt>
                                    <dd class="text-xs font-light text-gray-400">
                                        École
                                    </dd>
                                </div>
                            </dl>
                            <div class="flex justify-end p-2">
                                <button type="button" id="flipRecto" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                                    <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                         class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                              d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                                    </svg>
                                </button>
                            </div>
                        </div>
                        <div class="flip-card-back w-full min-h-[20rem] rounded-lg shadow-md bg-gray-700 flex flex-col justify-between">
                            <div class="">
                                <div class="flex justify-between p-2">
                                    <button type="button" id="flipVerso"
                                            class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                                        </svg>
                                    </button>
                                    <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                                        <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                             class="w-5 h-5">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                  d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                                        </svg>
                                    </button>
                                    <div class="rounded-full h-4 w-4 text-xs text-{{$spell->level->text_color}}"
                                         style="color: {{ $spell->level->text_color }}; background-color: {{ $spell->level->background_color }}"
                                    >
                                        {{ $spell->level->level_name }}
                                    </div>
                                </div>
                                <div class="items-center font-titleMiddleAge text-slate-100 p-2">
                                    <p class="grow">
                                        {{ $spell->name }}
                                    </p>
                                </div>
                            </div>
                            <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="text-sm text-slate-100 font-weight-bold">
                                        {{ $spell->is_rituel ? 'Oui' : 'Non' }}
                                    </dt>
                                    <dd class="text-xs font-light text-gray-400">Rituel</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="text-sm text-slate-100 font-weight-bold">
                                        {{ $spell->cast_time }}
                                    </dt>
                                    <dd class="text-xs font-light text-gray-400">Temps d'incantation</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="text-sm text-slate-100 font-weight-bold">
                                        {{ $spell->range }}
                                    </dt>
                                    <dd class="text-xs font-light text-gray-400">Portée</dd>
                                </div>
                                <div class="flex flex-col items-center justify-center">
                                    <dt class="text-sm text-slate-100 font-weight-bold">
                                        {{ $spell->duration }}
                                    </dt>
                                    <dd class="text-xs font-light text-gray-400">Durée</dd>
                                </div>
                            </dl>
                            <div class="flex justify-end p-2">
                                <button type="button"
                                        class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                                    <a class="hover:underline" href="{{route('spells.show', $spell)}}">
                                        Plus de détails
                                    </a>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <a href="{{ route('spells.show', $spell) }}"
                   class="sm:hidden flex justify-between gap-x-6 py-5 border-b border-gray-200">
                    <div class="flex gap-x-4">
                        <div class="min-w-0 flex-auto">
                            <p class="text-sm font-bold leading-6 text-gray-900">{{ $spell->name }}</p>
                            <p class="text-sm leading-5 text-gray-700">{{ $spell->school->name }}</p>
                            <p class="text-sm leading-5 text-gray-700">{{ $spell->cast_time }}</p>
                            <div class="flex flex-wrap gap-2 mt-1">
                                @foreach($spell->tags as $tag)
                                    <p
                                        class="text-xs text-center font-medium px-2.5 py-0.5 rounded bg-gray-300 text-gray-900"
                                    >
                                        {{ $tag->name }}
                                    </p>
                                @endforeach
                            </div>
                        </div>
                    </div>
                    <div class="flex flex-col items-center justify-center">
                        <p
                            class="text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded"
                            style="color: {{ $spell->level->text_color }}; background-color: {{ $spell->level->background_color }}"
                        >
                            {{ $spell->level->level_name === 0 ? 'Cantrip' : "Lvl {$spell->level->level_name}" }}
                        </p>
                    </div>
                </a>
            @endforeach
        </ul>
        {{ $spells->links() }}
    </div>

<style>
    input[type=range]::-webkit-slider-thumb {
        -webkit-appearance: none;
        pointer-events: all;
        width: 18px;
        height: 18px;
        background-color: #9b1c1c;
        border-radius: 50%;
        cursor: pointer;
    }

    input[type=range]::-webkit-slider-thumb:active {
        box-shadow: inset 0 0 2px #c81e1e, 0 0 3px #c81e1e;
        -webkit-box-shadow: inset 0 0 2px #c81e1e, 0 0 3px #c81e1e;
    }

    input[type="range"] {
        -webkit-appearance: none;
        appearance: none;
        height: 2px;
        position: absolute;
        background-color: #C6C6C6;
        pointer-events: none;
    }
    #slider-upper-value {
        background-color: transparent;
    }
</style>

<script>
    function checkLowerValue(input, otherSliderId) {
        let otherSlider = document.querySelector('#' + otherSliderId)
        if (input.value > otherSlider.value) {
            input.value = otherSlider.value
        }
    }
    function checkUpperValue(input, otherSliderId) {
        let otherSlider = document.querySelector('#' + otherSliderId)
        if (input.value < otherSlider.value) {
            input.value = otherSlider.value
        }
    }
</script>
