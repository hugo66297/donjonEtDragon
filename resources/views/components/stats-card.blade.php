<div class="flex flex-col bg-white border shadow-sm rounded-xl">
    <div class="bg-gray-100 border-b rounded-t-xl">
        <p
            class="text-white p-3 rounded-t-xl text-lg font-bold"
            style="background-color: {{ $color }}"
        >
            {{ $ability->name }}
        </p>
    </div>
    <div class="p-2">
        <div class="flex flex-col">
            <p class="inline-flex items-center gap-x-3 p-3 font-medium bg-white text-gray-800 -mt-px">
                <i class="fa-solid fa-star fa-beat"></i>
                <span>
                    Valeur
                </span>
                <span>
                    {{ $ability->pivot->ability_value }}
                </span>
            </p>
            <p class="inline-flex items-center gap-x-3 p-3 font-medium bg-white text-gray-800 -mt-px">
                <i class="fa-solid fa-fire fa-beat"></i>
                <span>
                    Modificateur
                </span>
                <span>
                    {{ $modifierFormat($ability) }}
                </span>
            </p>
        </div>
        <div class="p-3 flex flex-col items-center gap-y-2 sm:block">
            <p class="inline-flex gap-x-2 items-center font-bold bg-white text-gray-800">
                <svg viewBox="0 0 512 512" class="w-[20px] h-[20px]" data-tooltip-target="tooltip-throw-{{ $savingThrow->getKey() }}">
                    <path d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM216 336h24V272H216c-13.3 0-24-10.7-24-24s10.7-24 24-24h48c13.3 0 24 10.7 24 24v88h8c13.3 0 24 10.7 24 24s-10.7 24-24 24H216c-13.3 0-24-10.7-24-24s10.7-24 24-24zm40-208a32 32 0 1 1 0 64 32 32 0 1 1 0-64z"/>
                </svg>
                <span>Jet de sauvegarde</span>
            </p>
            <div class="flex flex-col items-center sm:items-start">
                <p class="inline-flex items-center gap-x-2 font-medium bg-white text-gray-800 -mt-px">
                    <i class="fa-solid fa-fire"></i>
                    <span>Modificateur</span>
                    <span>{{ $modifierFormat($savingThrow) }}</span>
                </p>
                <p class="inline-flex items-center gap-x-2 font-medium bg-white text-gray-800 -mt-px">
                    @if($savingThrow->pivot->is_proficient)
                        <i class="fa-solid fa-check"></i>
                        <span>Maitrisé</span>
                    @else
                        <i class="fa-solid fa-xmark"></i>
                        <span>Non maitrisé</span>
                    @endif
                    <span>{{ $modifierFormat($savingThrow) }}</span>
                </p>
            </div>
            <div id="tooltip-throw-{{ $savingThrow->getKey() }}" role="tooltip" class="absolute z-50 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
                Jet de sauvegarde {{ in_array($ability->name[0], ['A', 'E', 'I', 'O', 'U', 'Y']) ? 'd\'' : 'de ' }}{{ strtolower($ability->name) }}
                <div class="tooltip-arrow" data-popper-arrow></div>
            </div>
        </div>
    </div>
</div>
