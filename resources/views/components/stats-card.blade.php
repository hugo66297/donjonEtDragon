<div class="flex flex-col bg-[#fafaf8] border shadow-sm rounded-lg self-start" style="border-color: {{ $color }}">
    <div class="p-3 text-2xl rounded-t-lg flex items-center justify-between">
        <p class="text-white rounded-t-lg font-titleMiddleAge" style="color: {{ $color }}">
            {{ $ability->name }}
        </p>
        <p class="font-titleMiddleAge" style="color: {{ $color }}">{{ $ability->pivot->ability_value }}</p>
    </div>
    <div class="p-2" x-data="{ open: false }">
        <section class="flex flex-col">
            <div class="inline-flex items-center gap-x-2 font-medium text-gray-800 -mt-px">
                <p class="flex space-x-1 items-center">
                    <svg viewBox="0 0 448 512" class="w-[16px] h-[16px]">
                        <path fill="{{ $color }}" d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z"/>
                    </svg>
                    <span>Modificateur :</span>
                </p>
                <p>{{ $modifierFormat($ability) }}</p>
            </div>
            <div class="inline-flex items-center gap-x-2 font-medium text-gray-800 -mt-px">
                <p class="flex space-x-1 items-center">
                    <span>
                        <svg viewBox="0 0 512 512" class="w-[16px] h-[16px]">
                            <path fill="{{ $color }}" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM232 344V280H168c-13.3 0-24-10.7-24-24s10.7-24 24-24h64V168c0-13.3 10.7-24 24-24s24 10.7 24 24v64h64c13.3 0 24 10.7 24 24s-10.7 24-24 24H280v64c0 13.3-10.7 24-24 24s-24-10.7-24-24z"/>
                        </svg>
                    </span>
                    <span>
                        Bonus :
                    </span>
                </p>
                <p>
                    {{ $ability->pivot->other_modifier_ability ? "+{$ability->pivot->other_modifier_ability}" : "+0" }}
                </p>
            </div>
        </section>
        <section class="my-2 space-y-2" x-show="open" x-transition>
            <div>
                <p class="text-center font-bold">Jet de sauvegarde</p>
                <div class="py-1 flex items-center flex-wrap">
                    <div class="inline-flex items-center gap-x-2 mr-3 font-medium text-gray-800 -mt-px">
                        <p class="flex space-x-1 items-center">
                            <svg viewBox="0 0 448 512" class="w-[16px] h-[16px]">
                                <path fill="{{ $color }}" d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z"/>
                            </svg>
                            <span>Modifcateur :</span>
                        </p>
                        <p>{{ $modifierFormat($savingThrow) }}</p>
                    </div>
                    <div class="inline-flex items-center gap-x-2 font-medium text-gray-800 -mt-px">
                        <p class="flex space-x-1 items-center">
                            @if($savingThrow->pivot->is_proficient)
                                <svg viewBox="0 0 512 512" class="w-[16px] h-[16px]">
                                    <path fill="#00ff00" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                </svg>
                                <span>Maitrisé</span>
                            @else
                                <svg viewBox="0 0 512 512" class="w-[16px] h-[16px]">
                                    <path fill="#ff0000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/>
                                </svg>
                                <span>Non maitrisé</span>
                            @endif
                        </p>
                    </div>
                </div>
            </div>
            @if($skills->count() !== 0)
                <div>
                    <p class="text-center font-bold">Compétences</p>
                    <section class="">
                        @foreach($skills as $skill)
                            <div class="py-1">
                                <p class="font-bold">{{ $skill->name }}</p>
                                <div class="flex items-center flex-wrap">
                                    <div class="inline-flex items-center gap-x-2 mr-2 font-medium text-gray-800 -mt-px">
                                        <p class="flex space-x-1 items-center">
                                            <svg viewBox="0 0 448 512" class="w-[16px] h-[16px]">
                                                <path fill="{{ $color }}" d="M159.3 5.4c7.8-7.3 19.9-7.2 27.7 .1c27.6 25.9 53.5 53.8 77.7 84c11-14.4 23.5-30.1 37-42.9c7.9-7.4 20.1-7.4 28 .1c34.6 33 63.9 76.6 84.5 118c20.3 40.8 33.8 82.5 33.8 111.9C448 404.2 348.2 512 224 512C98.4 512 0 404.1 0 276.5c0-38.4 17.8-85.3 45.4-131.7C73.3 97.7 112.7 48.6 159.3 5.4zM225.7 416c25.3 0 47.7-7 68.8-21c42.1-29.4 53.4-88.2 28.1-134.4c-4.5-9-16-9.6-22.5-2l-25.2 29.3c-6.6 7.6-18.5 7.4-24.7-.5c-16.5-21-46-58.5-62.8-79.8c-6.3-8-18.3-8.1-24.7-.1c-33.8 42.5-50.8 69.3-50.8 99.4C112 375.4 162.6 416 225.7 416z"/>
                                            </svg>
                                            <span>Modifcateur :</span>
                                        </p>
                                        <p>{{ $modifierFormat($skill) }}</p>
                                    </div>
                                    <div class="inline-flex items-center gap-x-2 font-medium text-gray-800 -mt-px">
                                        <p class="flex space-x-1 items-center">
                                            @if($skill->pivot->is_proficient)
                                                <svg viewBox="0 0 512 512" class="w-[16px] h-[16px]">
                                                    <path fill="#00ff00" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM369 209L241 337c-9.4 9.4-24.6 9.4-33.9 0l-64-64c-9.4-9.4-9.4-24.6 0-33.9s24.6-9.4 33.9 0l47 47L335 175c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9z"/>
                                                </svg>
                                                <span>Maitrisé</span>
                                            @else
                                                <svg viewBox="0 0 512 512" class="w-[16px] h-[16px]">
                                                    <path fill="#ff0000" d="M256 512A256 256 0 1 0 256 0a256 256 0 1 0 0 512zM175 175c9.4-9.4 24.6-9.4 33.9 0l47 47 47-47c9.4-9.4 24.6-9.4 33.9 0s9.4 24.6 0 33.9l-47 47 47 47c9.4 9.4 9.4 24.6 0 33.9s-24.6 9.4-33.9 0l-47-47-47 47c-9.4 9.4-24.6 9.4-33.9 0s-9.4-24.6 0-33.9l47-47-47-47c-9.4-9.4-9.4-24.6 0-33.9z"/>
                                                </svg>
                                                <span>Non maitrisé</span>
                                            @endif
                                        </p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </section>
                </div>
            @endif
        </section>
        <div class="w-full text-gray-500 flex items-center justify-center">
            <button type="button" @click="open = !open" x-show="!open">
                <i class="fa-solid fa-angles-down hover:animate-bounce hover:delay-200"></i>
            </button>
            <button type="button" @click="open = !open" x-show="open">
                <i class="fa-solid fa-angles-up hover:animate-bounce hover:delay-200"></i>
            </button>
        </div>
    </div>
</div>
