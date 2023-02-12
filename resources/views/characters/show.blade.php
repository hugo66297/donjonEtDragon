<x-app-layout>
    <div class="sm:flex sm:flex-col grow">
        <div id="default-sidebar" data-tabs-toggle="#myTabContent" role="tablist" class="h-screen box-border py-3 px-2 z-40 transition-transform -translate-x-full fixed sm:translate-x-0 bg-gray-800 sm:bg-[#fafaf8]">
            <div class="flex flex-col h-full sm:justify-center space-y-4">
                <div class="text-right">
                    <button data-drawer-target="default-sidebar" data-drawer-toggle="default-sidebar" aria-controls="default-sidebar" type="button" class="inline-flex items-center p-2 text-sm text-gray-400 rounded-lg sm:hidden hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-200">
                        <span class="sr-only">Close sidebar</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-7 h-7">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </button>
                </div>
                <div class="rounded-lg bg-gray-800">
                    <x-sidebar-button :title="'Informations globales'" :id="'infos-tab'" :tabs="'#infos'" :tooltip="'tooltip-infos'" :controls="'infos'">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor">
                            <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                        </svg>
                    </x-sidebar-button>
                </div>
                <div class="rounded-lg bg-gray-800">
                    <x-sidebar-button :id="'stats-tab'" :tabs="'#stats'" :controls="'primaires'" :title="'Statistiques'" :tooltip="'tooltip-stats'">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor">
                            <path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/>
                        </svg>
                    </x-sidebar-button>
                </div>
                <div class="rounded-lg bg-gray-800">
                    <x-sidebar-button :id="'attaques-tab'" :tabs="'#attaques'" :controls="'armes'" :title="'Attaques et équipements'" :tooltip="'tooltip-armes'">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor">
                            <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7V176c0 8.8-7.2 16-16 16H384.2c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9V272c0-8.8 7.2-16 16-16h34.6c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM224 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z"/>
                        </svg>
                    </x-sidebar-button>
                </div>
                <div class="rounded-lg bg-gray-800">
                    <x-sidebar-button :id="'maitrises-tab'" :tabs="'#maitrises'" :controls="'maitrises'" :title="'Maîtrises et aptitudes'" :tooltip="'tooltip-maitrises'">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor">
                            <path d="M0 80v48c0 17.7 14.3 32 32 32H48 96V80c0-26.5-21.5-48-48-48S0 53.5 0 80zM112 32c10 13.4 16 30 16 48V384c0 35.3 28.7 64 64 64s64-28.7 64-64v-5.3c0-32.4 26.3-58.7 58.7-58.7H480V128c0-53-43-96-96-96H112zM464 480c61.9 0 112-50.1 112-112c0-8.8-7.2-16-16-16H314.7c-14.7 0-26.7 11.9-26.7 26.7V384c0 53-43 96-96 96H368h96z"/>
                        </svg>
                    </x-sidebar-button>
                </div>
                <div class="rounded-lg bg-gray-800">
                    <x-sidebar-button :id="'origine-tab'" :tabs="'#origine'" :controls="'origine'" :title="'Origine du personnage'" :tooltip="'tooltip-origine'">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="flex-shrink-0 w-6 h-6 transition duration-75" fill="currentColor">
                            <path d="M0 96C0 43 43 0 96 0h96V190.7c0 13.4 15.5 20.9 26 12.5L272 160l54 43.2c10.5 8.4 26 .9 26-12.5V0h32 32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zM64 416c0 17.7 14.3 32 32 32H352V384H96c-17.7 0-32 14.3-32 32z"/>
                        </svg>
                    </x-sidebar-button>
                </div>
            </div>
        </div>

        <div id="myTabContent" class="flex grow sm:ml-16">
            <x-tab-item :title="'Informations globales'" :id="'infos'" :ariaLabel="'infos-tab'">
                <div class="flex flex-col md:flex-row gap-y-3 md:gap-y-0 gap-x-5 justify-between items-center">
                    <div class="grid gap-x-5 gap-y-4 grid-cols-2 md:w-2/5 w-full sm:w-4/5">
                        <div class="flex flex-col">
                            <p class="text-gray-500">Guerrier</p>
                            <hr class="border border-t-gray-500">
                            <p class="font-normalMedieval md:text-xl text-red-900">Classe</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-gray-500">Noble</p>
                            <hr class="border border-t-gray-500">
                            <p class="font-normalMedieval md:text-xl text-red-900">Historique</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-gray-500">Nain</p>
                            <hr class="border border-t-gray-500">
                            <p class="font-normalMedieval md:text-xl text-red-900">Race</p>
                        </div>
                        <div class="flex flex-col">
                            <p class="text-gray-500">Loyal Bon</p>
                            <hr class="border border-t-gray-500">
                            <p class="font-normalMedieval md:text-xl text-red-900">Alignement</p>
                        </div>
                    </div>
                    <div class="md:w-1/2 w-full">
                        <div id="grid-2col" class="grid sm:grid-cols-5 grid-cols-6 md:grid-cols-6 justify-center gap-y-4">
                            <div class="justify-self-center div-col2 col-span-2 sm:col-span-1 md:col-span-2">
                                <p class="text-gray-800 text-center">
                                    <i class="fas fa-shield-alt"></i>
                                    <span>17</span>
                                </p>
                                <p class="font-normalMedieval md:text-xl text-red-900">Classe d'armure</p>
                            </div>
                            <div class="justify-self-center div-col2 col-span-2 sm:col-span-1 md:col-span-2">
                                <p class="text-gray-800 text-center">
                                    <i class="fas fa-lightbulb"></i>
                                    <span>17</span>
                                </p>
                                <p class="font-normalMedieval md:text-xl text-red-900">Initiative</p>
                            </div>
                            <div class="justify-self-center div-col2 col-span-2 sm:col-span-1 md:col-span-2">
                                <p class="text-gray-800 text-center">
                                    <i class="fas fa-running"></i>
                                    <span>17m</span>
                                </p>
                                <p class="font-normalMedieval md:text-xl text-red-900">Vitesse</p>
                            </div>
                            <div class="justify-self-center div-col2 col-span-3 sm:col-span-1 md:col-span-3">
                                <p class="text-gray-800 text-center">
                                    <i class="fas fa-heart"></i>
                                    <span>17</span>
                                </p>
                                <p class="font-normalMedieval md:text-xl text-red-900">Points de vie</p>
                            </div>
                            <div class="justify-self-center div-col4 col-span-3 sm:col-span-1 md:col-span-3">
                                <p class="text-gray-800 text-center">
                                    <i class="fa-solid fa-dice-six"></i>
                                    <span>17</span>
                                </p>
                                <p class="font-normalMedieval md:text-xl text-red-900">Dés de vie</p>
                            </div>
                        </div>
                    </div>
                </div>
                <hr class="border border-t-gray-500 my-2">
                <div class="text-justify">
                    <div>
                        <p class="font-normalMedieval text-xl text-red-900">Traits de personnalité</p>
                        <p class="text-gray-500 indent-4">Quand je prends une décision, je m'y tiens. J'utilise des mots compliqués pour avoir l'air plus intelligent.</p>
                    </div>
                    <div>
                        <p class="font-normalMedieval text-xl text-red-900">Idéaux</p>
                        <p class="text-gray-500 indent-4">Sincérité. Il est inutile que je prétende être ce que je ne suis pas.</p>
                    </div>
                    <div>
                        <p class="font-normalMedieval text-xl text-red-900">Liens</p>
                        <p class="text-gray-500 indent-4">Un jour, Arbrefoudre redeviendra une communauté prospère et une statue à mon effigie se trouvera sur la grand place.</p>
                    </div>
                    <div>
                        <p class="font-normalMedieval text-xl text-red-900">Défauts</p>
                        <p class="text-gray-500 indent-4">Je suis convaincu qu'une grande destinée m'attend et je refuse de reconnaître mes faiblesses et la possibilité que j'échoue.</p>
                    </div>
                </div>
            </x-tab-item>
            <x-tab-item :title="'Statistiques'" :id="'stats'" :ariaLabel="'stats-tab'">
            <div id="flex-col" class="grid grid-cols-2 md:grid md:grid-cols-3 lg:grid lg:grid-cols-6 gap-8">
                <x-stat-bloc :textColor="'text-yellow-600'" :borderColor="'border-yellow-600'" :name="'Force'" :modifier="'+2'" :value="14">
                    <div class="space-y-4 p-2">
                        <div>
                            <p class="font-titleMiddleAge text-lg text-center underline">Jet sauvegarde</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+4</p>
                                <p>Force</p>
                            </div>
                        </div>
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Compétence</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Athlétisme</p>
                            </div>
                        </div>
                    </div>
                </x-stat-bloc>
                <x-stat-bloc :textColor="'text-lime-600'" :borderColor="'border-lime-600'" :name="'Dextérité'" :modifier="'+2'" :value="16">
                    <div class="space-y-4 p-2">
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Jet sauvegarde</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+4</p>
                                <p>Dextérité</p>
                            </div>
                        </div>
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Compétences</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Athlétisme</p>
                            </div>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Athlétisme</p>
                            </div>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Athlétisme</p>
                            </div>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Athlétisme</p>
                            </div>
                        </div>
                    </div>
                </x-stat-bloc>
                <x-stat-bloc :textColor="'text-blue-800'" :borderColor="'border-blue-800'" :name="'Constitution'" :modifier="'+3'" :value="17">
                    <div class="space-y-4 p-2">
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Jet sauvegarde</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+4</p>
                                <p>Constitution</p>
                            </div>
                        </div>
                    </div>
                </x-stat-bloc>
                <x-stat-bloc :textColor="'text-red-700'" :borderColor="'border-red-700'" :name="'Intelligence'" :modifier="'-3'" :value="9">
                    <div class="space-y-4 p-2">
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Jet sauvegarde</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+4</p>
                                <p>Intelligence</p>
                            </div>
                        </div>
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Compétences</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Athlétisme</p>
                            </div>
                        </div>
                    </div>
                </x-stat-bloc>
                <x-stat-bloc :textColor="'text-fuchsia-800'" :borderColor="'border-fuchsia-800'" :name="'Sagesse'" :modifier="'-1'" :value="6">
                    <div class="space-y-4 p-2">
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Jet sauvegarde</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+4</p>
                                <p>Sagesse</p>
                            </div>
                        </div>
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Compétences</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Athlétisme</p>
                            </div>
                        </div>
                    </div>
                </x-stat-bloc>
                <x-stat-bloc :textColor="'text-amber-500'" :borderColor="'border-amber-500'" :name="'Charisme'" :modifier="'+5'" :value="19">
                    <div class="space-y-4 p-2">
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Jet sauvegarde</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+4</p>
                                <p>Force</p>
                            </div>
                        </div>
                        <div>
                            <p class="font-titleMiddleAge text-xl text-center underline">Compétences</p>
                            <div class="flex items-center space-x-2 mt-2">
                                <p class="min-w-[0.5rem] min-h-[0.5rem] rounded-full bg-black mr-2"></p>
                                <p>+2</p>
                                <p>Charisme</p>
                            </div>
                        </div>
                    </div>
                </x-stat-bloc>
            </div>
            </x-tab-item>
            <x-tab-item :title="'Attaques et équipements'" :id="'attaques'" :ariaLabel="'attaques-tab'">
                <div>
                    <h2 class="text-center text-xl text-red-900 font-normalMedieval tracking-wide p-4">
                        Attaques et incantations
                    </h2>

                    <div class="relative flex justify-center">
                        <table class="w-4/5 text-left border-separate border-spacing-4">
                            <thead class="font-titleMiddleAge text-xl">
                            <tr class="">
                                <th scope="col" class="px-6">
                                    Nom
                                </th>
                                <th scope="col" class="px-6">
                                    Bonus d'attaque
                                </th>
                                <th scope="col" class="px-6">
                                    Dégât/Type
                                </th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="text-center">
                                <th scope="row" class="px-6 py-4 border rounded-tl-2xl rounded-br-2xl bg-[#e7e7db]/[.2] shadow-md">
                                    Hache à deux mains
                                </th>
                                <td class="px-6 py-4 border rounded-tl-xl rounded-br-xl bg-[#e7e7db]/[.2] shadow-md">
                                    +5
                                </td>
                                <td class="px-6 py-4 border rounded-tl-xl rounded-br-xl bg-[#e7e7db]/[.2] shadow-md">
                                    1d12 + 3 tranchants
                                </td>
                            </tr>
                            <tr class="text-center">
                                <th scope="row" class="px-6 py-4 border rounded-tl-xl rounded-br-xl bg-[#e7e7db]/[.2] shadow-md">
                                    Javeline
                                </th>
                                <td class="px-6 py-4 border rounded-tl-xl rounded-br-xl bg-[#e7e7db]/[.2] shadow-md">
                                    +5
                                </td>
                                <td class="px-6 py-4 border rounded-tl-xl rounded-br-xl bg-[#e7e7db]/[.2] shadow-md">
                                    1d6 + 3 perforants
                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <hr class="my-4 w-4/5 ml-[10%]">
                <div class="flex justify-center space-x-6">
                    <div class="w-2/5">
                        <h2 class="text-xl text-red-900 font-normalMedieval tracking-wide p-4 text-center">
                            Pièces
                        </h2>

                        <div class="relative overflow-x-auto">
                            <table class="w-full text-left border-separate border-spacing-y-4">
                                <thead class="font-titleMiddleAge text-xl">
                                <tr>
                                    <th scope="col" class="px-6">
                                        <span class="sr-only">Image</span>
                                    </th>
                                    <th scope="col" class="px-6">
                                        Nom
                                    </th>
                                    <th scope="col" class="px-6">
                                        Quantité
                                    </th>
                                </tr>
                                </thead>
                                <tbody>
                                    <tr class="bg-[#e7e7db]/[.2]">
                                        <td class="rounded-tl-xl p-2 border-y border-l">
                                            <img src="{{asset('/storage/img/coins/copper_coin.png')}}" class="w-16 h-16" alt="Apple Watch">
                                        </td>
                                        <td class="px-6 py-4 font-semibold border-y">
                                            Apple Watch
                                        </td>
                                        <td class="px-6 py-4 font-semibold rounded-br-xl border-y border-r">
                                            $599
                                        </td>
                                    </tr>
                                    <tr class="bg-[#e7e7db]/[.2]">
                                        <td class="rounded-tl-xl p-2 border-y border-l">
                                            <img src="{{asset('/storage/img/coins/copper_coin.png')}}" class="w-16 h-16" alt="Apple Watch">
                                        </td>
                                        <td class="px-6 py-4 font-semibold border-y">
                                            Apple Watch
                                        </td>
                                        <td class="px-6 py-4 font-semibold rounded-br-xl border-y border-r">
                                            $599
                                        </td>
                                    </tr>
                                    <tr class="bg-[#e7e7db]/[.2]">
                                        <td class="rounded-tl-xl p-2 border-y border-l">
                                            <img src="{{asset('/storage/img/coins/copper_coin.png')}}" class="w-16 h-16" alt="Apple Watch">
                                        </td>
                                        <td class="px-6 py-4 font-semibold border-y">
                                            Apple Watch
                                        </td>
                                        <td class="px-6 py-4 font-semibold rounded-br-xl border-y border-r">
                                            $599
                                        </td>
                                    </tr>
                                    <tr class="bg-[#e7e7db]/[.2]">
                                        <td class="rounded-tl-xl p-2 border-y border-l">
                                            <img src="{{asset('/storage/img/coins/copper_coin.png')}}" class="w-16 h-16" alt="Apple Watch">
                                        </td>
                                        <td class="px-6 py-4 font-semibold border-y">
                                            Apple Watch
                                        </td>
                                        <td class="px-6 py-4 font-semibold rounded-br-xl border-y border-r">
                                            $599
                                        </td>
                                    </tr>
                                    <tr class="bg-[#e7e7db]/[.2]">
                                        <td class="rounded-tl-xl p-2 border-y border-l">
                                            <img src="{{asset('/storage/img/coins/copper_coin.png')}}" class="w-16 h-16" alt="Apple Watch">
                                        </td>
                                        <td class="px-6 py-4 font-semibold border-y">
                                            Apple Watch
                                        </td>
                                        <td class="px-6 py-4 font-semibold rounded-br-xl border-y border-r">
                                            $599
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="w-2/5">
                        <h2 class="text-xl text-red-900 font-normalMedieval tracking-wide p-4 text-center">
                            Équipements
                        </h2>
                        <div>
                            <p>
                                Une cotte de mailles*, une hache à deux mains, 3 javelines, un sac à dos, une couverture, une boite à amadou,
                                2 jours de rations, une outre, de beaux habits, une chevalière, une lettre de noblesse
                            </p>
                            <br>
                            <p>
                                Quand vous portez cette armure, vous êtes désavantagé lors de vos tests de Dextérité (Discrétion).
                            </p>
                        </div>
                    </div>
                </div>
            </x-tab-item>
            <x-tab-item :title="'Maitrises et aptitudes'" :id="'maitrises'" :ariaLabel="'maitrises-tab'">
            </x-tab-item>
            <x-tab-item :title="'Origine du personnage'" :id="'origine'" :ariaLabel="'origine-tab'">
            </x-tab-item>
        </div>
    </div>
</x-app-layout>
