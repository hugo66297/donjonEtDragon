<x-app-layout>
    <h1 class="font-normalMedieval text-center underline underline-offset-2 tracking-wide text-red-900 text-4xl">
        Nos {{ ucfirst($category->name) }}s :
    </h1>
    <div class="px-1 my-2 gap-2 max-[390px]:px-8 sm:gap-4 sm:px-8 sm:py-4 grid max-[390px]:grid-cols-1 grid-cols-2 sm:grid-cols-3 md:grid-cols-4 lg:grid-cols-5 xl:grid-cols-6">
        <div class="flip-card min-h-[20rem]">
            <div class="flip-card-inner">
                <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                    <div class="flex justify-between p-2">
                        <div class="">
                            <span class="bg-green-900 text-green-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                LMOP
                            </span>
                            <span class="bg-blue-900 text-blue-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                ID
                            </span>
                        </div>
                        <div class="rounded-full h-12 w-12 m-0 bg-cover" style="background-image: url({{asset('storage/img/races/Tieffelin.png')}});"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Guerrier</dt>
                            <dd class="text-xs font-light text-gray-400">Classe</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Humain</dt>
                            <dd class="text-xs font-light text-gray-400">Race</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Héros du peuple</dt>
                            <dd class="text-xs font-light text-gray-400">Historique</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Loyal Neutre</dt>
                            <dd class="text-xs font-light text-gray-400">Alignement</dd>
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
                    <div class="flex items-center text-lg font-normalMedieval text-slate-100 p-2">
                        <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                        <p class="grow">Caractéristiques</p>
                        <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-2">
                        <div class="flex items-center justify-center gap-x-2 text-yellow-600 font-extrabold">
                            <i class="fas fa-fist-raised"></i>
                            <p>+2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-lime-600 font-extrabold">
                            <i class="fas fa-dice"></i>
                            <p>+6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-blue-600 font-extrabold">
                            <i class="fas fa-male"></i>
                            <p>+3</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-red-600 font-extrabold">
                            <i class="fas fa-brain"></i>
                            <p>+4</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-fuchsia-600 font-extrabold">
                            <i class="fas fa-book"></i>
                            <p>-2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-amber-400 font-extrabold">
                            <i class="fas fa-bolt"></i>
                            <p>-6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-shield-alt"></i>
                            <p>17</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-lightbulb"></i>
                            <p>6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-running"></i>
                            <p>9m</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-heart"></i>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                            <a class="hover:underline">Plus de détails</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card min-h-[20rem]">
            <div class="flip-card-inner">
                <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                    <div class="flex justify-between p-2">
                        <div class="">
                            <span class="bg-green-900 text-green-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                LMOP
                            </span>
                            <span class="bg-blue-900 text-blue-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                ID
                            </span>
                        </div>
                        <div class="rounded-full h-12 w-12 m-0 bg-cover" style="background-image: url({{asset('storage/img/races/Tieffelin.png')}});"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Guerrier</dt>
                            <dd class="text-xs font-light text-gray-400">Classe</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Humain</dt>
                            <dd class="text-xs font-light text-gray-400">Race</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Héros du peuple</dt>
                            <dd class="text-xs font-light text-gray-400">Historique</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Loyal Neutre</dt>
                            <dd class="text-xs font-light text-gray-400">Alignement</dd>
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
                    <div class="flex items-center text-lg font-normalMedieval text-slate-100 p-2">
                        <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                        <p class="grow">Caractéristiques</p>
                        <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-2">
                        <div class="flex items-center justify-center gap-x-2 text-yellow-600 font-extrabold">
                            <i class="fas fa-fist-raised"></i>
                            <p>+2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-lime-600 font-extrabold">
                            <i class="fas fa-dice"></i>
                            <p>+6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-blue-600 font-extrabold">
                            <i class="fas fa-male"></i>
                            <p>+3</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-red-600 font-extrabold">
                            <i class="fas fa-brain"></i>
                            <p>+4</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-fuchsia-600 font-extrabold">
                            <i class="fas fa-book"></i>
                            <p>-2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-amber-400 font-extrabold">
                            <i class="fas fa-bolt"></i>
                            <p>-6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-shield-alt"></i>
                            <p>17</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-lightbulb"></i>
                            <p>6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-running"></i>
                            <p>9m</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-heart"></i>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                            <a class="hover:underline">Plus de détails</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card min-h-[20rem]">
            <div class="flip-card-inner">
                <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                    <div class="flex justify-between p-2">
                        <div class="">
                            <span class="bg-green-900 text-green-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                LMOP
                            </span>
                            <span class="bg-blue-900 text-blue-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                ID
                            </span>
                        </div>
                        <div class="rounded-full h-12 w-12 m-0 bg-cover" style="background-image: url({{asset('storage/img/races/Tieffelin.png')}});"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Guerrier</dt>
                            <dd class="text-xs font-light text-gray-400">Classe</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Humain</dt>
                            <dd class="text-xs font-light text-gray-400">Race</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Héros du peuple</dt>
                            <dd class="text-xs font-light text-gray-400">Historique</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Loyal Neutre</dt>
                            <dd class="text-xs font-light text-gray-400">Alignement</dd>
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
                    <div class="flex items-center text-lg font-normalMedieval text-slate-100 p-2">
                        <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                        <p class="grow">Caractéristiques</p>
                        <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-2">
                        <div class="flex items-center justify-center gap-x-2 text-yellow-600 font-extrabold">
                            <i class="fas fa-fist-raised"></i>
                            <p>+2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-lime-600 font-extrabold">
                            <i class="fas fa-dice"></i>
                            <p>+6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-blue-600 font-extrabold">
                            <i class="fas fa-male"></i>
                            <p>+3</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-red-600 font-extrabold">
                            <i class="fas fa-brain"></i>
                            <p>+4</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-fuchsia-600 font-extrabold">
                            <i class="fas fa-book"></i>
                            <p>-2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-amber-400 font-extrabold">
                            <i class="fas fa-bolt"></i>
                            <p>-6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-shield-alt"></i>
                            <p>17</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-lightbulb"></i>
                            <p>6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-running"></i>
                            <p>9m</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-heart"></i>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                            <a class="hover:underline">Plus de détails</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card min-h-[20rem]">
            <div class="flip-card-inner">
                <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                    <div class="flex justify-between p-2">
                        <div class="">
                            <span class="bg-green-900 text-green-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                LMOP
                            </span>
                            <span class="bg-blue-900 text-blue-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                ID
                            </span>
                        </div>
                        <div class="rounded-full h-12 w-12 m-0 bg-cover" style="background-image: url({{asset('storage/img/races/Tieffelin.png')}});"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Guerrier</dt>
                            <dd class="text-xs font-light text-gray-400">Classe</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Humain</dt>
                            <dd class="text-xs font-light text-gray-400">Race</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Héros du peuple</dt>
                            <dd class="text-xs font-light text-gray-400">Historique</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Loyal Neutre</dt>
                            <dd class="text-xs font-light text-gray-400">Alignement</dd>
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
                    <div class="flex items-center text-lg font-normalMedieval text-slate-100 p-2">
                        <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                        <p class="grow">Caractéristiques</p>
                        <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-2">
                        <div class="flex items-center justify-center gap-x-2 text-yellow-600 font-extrabold">
                            <i class="fas fa-fist-raised"></i>
                            <p>+2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-lime-600 font-extrabold">
                            <i class="fas fa-dice"></i>
                            <p>+6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-blue-600 font-extrabold">
                            <i class="fas fa-male"></i>
                            <p>+3</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-red-600 font-extrabold">
                            <i class="fas fa-brain"></i>
                            <p>+4</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-fuchsia-600 font-extrabold">
                            <i class="fas fa-book"></i>
                            <p>-2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-amber-400 font-extrabold">
                            <i class="fas fa-bolt"></i>
                            <p>-6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-shield-alt"></i>
                            <p>17</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-lightbulb"></i>
                            <p>6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-running"></i>
                            <p>9m</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-heart"></i>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                            <a class="hover:underline">Plus de détails</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card min-h-[20rem]">
            <div class="flip-card-inner">
                <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                    <div class="flex justify-between p-2">
                        <div class="">
                            <span class="bg-green-900 text-green-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                LMOP
                            </span>
                            <span class="bg-blue-900 text-blue-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                ID
                            </span>
                        </div>
                        <div class="rounded-full h-12 w-12 m-0 bg-cover" style="background-image: url({{asset('storage/img/races/Tieffelin.png')}});"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Guerrier</dt>
                            <dd class="text-xs font-light text-gray-400">Classe</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Humain</dt>
                            <dd class="text-xs font-light text-gray-400">Race</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Héros du peuple</dt>
                            <dd class="text-xs font-light text-gray-400">Historique</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Loyal Neutre</dt>
                            <dd class="text-xs font-light text-gray-400">Alignement</dd>
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
                    <div class="flex items-center text-lg font-normalMedieval text-slate-100 p-2">
                        <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                        <p class="grow">Caractéristiques</p>
                        <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-2">
                        <div class="flex items-center justify-center gap-x-2 text-yellow-600 font-extrabold">
                            <i class="fas fa-fist-raised"></i>
                            <p>+2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-lime-600 font-extrabold">
                            <i class="fas fa-dice"></i>
                            <p>+6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-blue-600 font-extrabold">
                            <i class="fas fa-male"></i>
                            <p>+3</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-red-600 font-extrabold">
                            <i class="fas fa-brain"></i>
                            <p>+4</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-fuchsia-600 font-extrabold">
                            <i class="fas fa-book"></i>
                            <p>-2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-amber-400 font-extrabold">
                            <i class="fas fa-bolt"></i>
                            <p>-6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-shield-alt"></i>
                            <p>17</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-lightbulb"></i>
                            <p>6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-running"></i>
                            <p>9m</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-heart"></i>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                            <a class="hover:underline">Plus de détails</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card min-h-[20rem]">
            <div class="flip-card-inner">
                <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                    <div class="flex justify-between p-2">
                        <div class="">
                            <span class="bg-green-900 text-green-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                LMOP
                            </span>
                            <span class="bg-blue-900 text-blue-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                ID
                            </span>
                        </div>
                        <div class="rounded-full h-12 w-12 m-0 bg-cover" style="background-image: url({{asset('storage/img/races/Tieffelin.png')}});"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Guerrier</dt>
                            <dd class="text-xs font-light text-gray-400">Classe</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Humain</dt>
                            <dd class="text-xs font-light text-gray-400">Race</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Héros du peuple</dt>
                            <dd class="text-xs font-light text-gray-400">Historique</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Loyal Neutre</dt>
                            <dd class="text-xs font-light text-gray-400">Alignement</dd>
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
                    <div class="flex items-center text-lg font-normalMedieval text-slate-100 p-2">
                        <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                        <p class="grow">Caractéristiques</p>
                        <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-2">
                        <div class="flex items-center justify-center gap-x-2 text-yellow-600 font-extrabold">
                            <i class="fas fa-fist-raised"></i>
                            <p>+2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-lime-600 font-extrabold">
                            <i class="fas fa-dice"></i>
                            <p>+6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-blue-600 font-extrabold">
                            <i class="fas fa-male"></i>
                            <p>+3</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-red-600 font-extrabold">
                            <i class="fas fa-brain"></i>
                            <p>+4</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-fuchsia-600 font-extrabold">
                            <i class="fas fa-book"></i>
                            <p>-2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-amber-400 font-extrabold">
                            <i class="fas fa-bolt"></i>
                            <p>-6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-shield-alt"></i>
                            <p>17</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-lightbulb"></i>
                            <p>6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-running"></i>
                            <p>9m</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-heart"></i>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                            <a class="hover:underline">Plus de détails</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
        <div class="flip-card min-h-[20rem]">
            <div class="flip-card-inner">
                <div class="flip-card-front w-full min-h-[20rem] rounded-lg bg-gray-700 flex flex-col justify-between">
                    <div class="flex justify-between p-2">
                        <div class="">
                            <span class="bg-green-900 text-green-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                LMOP
                            </span>
                            <span class="bg-blue-900 text-blue-300 text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                                ID
                            </span>
                        </div>
                        <div class="rounded-full h-12 w-12 m-0 bg-cover" style="background-image: url({{asset('storage/img/races/Tieffelin.png')}});"></div>
                    </div>
                    <dl class="grid grid-cols-2 gap-x-2 gap-y-6 text-gray-900 p-2">
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Guerrier</dt>
                            <dd class="text-xs font-light text-gray-400">Classe</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Humain</dt>
                            <dd class="text-xs font-light text-gray-400">Race</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Héros du peuple</dt>
                            <dd class="text-xs font-light text-gray-400">Historique</dd>
                        </div>
                        <div class="flex flex-col items-center justify-center">
                            <dt class="text-sm text-slate-100 font-weight-bold">Loyal Neutre</dt>
                            <dd class="text-xs font-light text-gray-400">Alignement</dd>
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
                    <div class="flex items-center text-lg font-normalMedieval text-slate-100 p-2">
                        <button type="button" id="flipVerso" class="p-1 text-white bg-gray-700 hover:bg-gray-400 focus:outline-none font-medium rounded-full text-center items-center">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                        <p class="grow">Caractéristiques</p>
                        <button class=" invisible p-1 text-white bg-gray-700 font-medium rounded-full">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75" />
                            </svg>
                        </button>
                    </div>
                    <div class="grid grid-cols-2 gap-4 p-2">
                        <div class="flex items-center justify-center gap-x-2 text-yellow-600 font-extrabold">
                            <i class="fas fa-fist-raised"></i>
                            <p>+2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-lime-600 font-extrabold">
                            <i class="fas fa-dice"></i>
                            <p>+6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-blue-600 font-extrabold">
                            <i class="fas fa-male"></i>
                            <p>+3</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-red-600 font-extrabold">
                            <i class="fas fa-brain"></i>
                            <p>+4</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-fuchsia-600 font-extrabold">
                            <i class="fas fa-book"></i>
                            <p>-2</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-amber-400 font-extrabold">
                            <i class="fas fa-bolt"></i>
                            <p>-6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-shield-alt"></i>
                            <p>17</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-lightbulb"></i>
                            <p>6</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-running"></i>
                            <p>9m</p>
                        </div>
                        <div class="flex items-center justify-center gap-x-2 text-gray-400 font-extrabold">
                            <i class="fas fa-heart"></i>
                            <p>12</p>
                        </div>
                    </div>
                    <div class="flex justify-end p-2">
                        <button type="button" class="text-white font-normalMedieval bg-gray-700 focus:outline-none font-medium text-center">
                            <a class="hover:underline" href="{{route('characters.show', 1)}}">Plus de détails</a>
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
