<x-app-layout>
    <div class="px-1 gap-2 max-[390px]:px-8 sm:gap-4 sm:px-8 sm:py-4 grid max-[390px]:grid-cols-1 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
        @foreach($spells as $spell)
            <div class="flip-card min-h-[20rem]">
                <div class="flip-card-inner">
                    <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                        <div class="flex justify-between p-2">
                            <div class="">
                            <span class="bg-{{$spell->level->background_color}} text-{{$spell->level->text_color}} text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
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
                                    {{ $spell->school }}
                                </dt>
                                <dd class="text-xs font-light text-gray-400">
                                    École
                                </dd>
                            </div>
                        </dl>
                        <div class="flex justify-end p-2">
                            <button type="button" id="flipRecto" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75" />
                                </svg>
                            </button>
                        </div>
                    </div>
                    <div class="flip-card-back w-full min-h-[20rem] rounded-lg shadow-md bg-gray-700 flex flex-col justify-between">
                        <div class="">
                            <div class="flex justify-between p-2">
                                <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                    </svg>
                                </button>
                                <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                        <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                                    </svg>
                                </button>
                                <div class="rounded-full h-4 w-4 bg-{{$spell->level->background_color}} text-xs text-{{$spell->level->text_color}}">
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
                            <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                                <a class="hover:underline" href="{{route('spells.show', $spell)}}">Plus de détails</a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $spells->links() }}
</x-app-layout>

<script>
    let cards = document.querySelectorAll(".flip-card")

    for (let card of cards) {
        card.querySelector('#flipRecto').addEventListener("click", () => {
            card.querySelector(".flip-card-inner").classList.toggle("flipTrue")
        })
        card.querySelector('#flipVerso').addEventListener("click", () => {
            card.querySelector(".flip-card-inner").classList.toggle("flipTrue")
        })
    }
</script>
