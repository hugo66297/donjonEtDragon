<x-app-layout>
    <div class="max-[390px]:px-8 sm:gap-4 sm:px-8 sm:py-4">
        <form class="flex items-center" action="{{ route('spells.search') }}" method="GET">
            @csrf
            <label for="simple-search" class="sr-only">Search</label>
            <div class="relative w-full">
                <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                    <svg aria-hidden="true" class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path></svg>
                </div>
                <input name="query" type="text" id="simple-search" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full pl-10 p-2.5  dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search" required>
            </div>
            <button type="submit" class="p-2.5 ml-2 text-sm font-medium text-white bg-blue-700 rounded-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"></path></svg>
                <span class="sr-only">Search</span>
            </button>
        </form>
    </div>
    <div class="px-1 gap-2 max-[390px]:px-8 sm:gap-4 sm:px-8 sm:py-4 grid max-[390px]:grid-cols-1 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
        @foreach($spells as $spell)
            <div class="flip-card min-h-[20rem]">
                <div class="flip-card-inner">
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
                            <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                                <a class="hover:underline" href="{{route('spells.show', [$spell, $spells->currentPage()])}}">
                                    Plus de détails
                                </a>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    {{ $spells->appends(['page' => $spells->currentPage()])->links() }}
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
