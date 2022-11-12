<x-app-layout>
    <nav class="flex my-2 px-0.5 sm:px-0.5" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium hover:text-gray-900 text-gray-400">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Accueil
                </a>
            </li>
            <li aria-current="page" class="inline-flex items-center">
                <a href="{{ route('categories.index') }}" class="inline-flex items-center text-sm font-medium hover:text-gray-900 text-gray-400">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium md:ml-2 hover:text-gray-900 text-gray-400">Classes</span>
                </a>
            </li>
            <li aria-current="page" class="inline-flex items-center">
                <a href="" class="inline-flex items-center text-sm font-medium hover:text-gray-900 text-gray-400">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium md:ml-2 hover:text-gray-900 text-gray-400 ">Personnages</span>
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium md:ml-2 text-red-400">Nom du perso</span>
                </div>
            </li>
        </ol>
    </nav>
    <div class="flex" aria-label="Sidebar">
        <div class="box-border py-4 px-3 mx-0.5 rounded bg-gray-800">
            <ul class="space-y-2" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
                <li>
                    <button data-tooltip-target="tooltip-default" data-tooltip-placement="right" class="flex p-2 rounded-t-lg" id="infos-tab" data-tabs-target="#infos" role="tab" aria-controls="infos" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-red-600" fill="currentColor">
                            <path d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                        </svg>
                        <span class="ml-3 whitespace-nowrap hidden md:block">Informations globales</span>
                    </button>
                    <div id="tooltip-default" role="tooltip" class="md:hidden inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip">
                        Informations globales
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>
                <li>
                    <button data-tooltip-target="tooltip-primaires" data-tooltip-placement="right" class="flex p-2 rounded-t-lg text-red-600" id="stats-tab" data-tabs-target="#stats" type="button" role="tab" aria-controls="primaires" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-red-600" fill="currentColor">
                            <path d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/>
                        </svg>
                        <span class="ml-3 whitespace-nowrap hidden md:block">Statistiques</span>
                    </button>
                    <div id="tooltip-primaires" role="tooltip" class="md:hidden inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip">
                        Statistiques
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>
                <li>
                    <button data-tooltip-target="tooltip-armes" data-tooltip-placement="right" class="flex p-2 rounded-t-lg text-red-600" id="attaques-tab" data-tabs-target="#attaques" type="button" role="tab" aria-controls="armes" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-red-600" fill="currentColor">
                            <path d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7V176c0 8.8-7.2 16-16 16H384.2c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9V272c0-8.8 7.2-16 16-16h34.6c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM224 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z"/>
                        </svg>
                        <span class="ml-3 whitespace-nowrap hidden md:block">Attaques et équipements</span>
                    </button>
                    <div id="tooltip-armes" role="tooltip" class="md:hidden inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip">
                        Armes et équipements
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>
                <li>
                    <button data-tooltip-target="tooltip-maitrises" data-tooltip-placement="right" class="flex p-2 rounded-t-lg text-red-600" id="maitrises-tab" data-tabs-target="#maitrises" type="button" role="tab" aria-controls="maitrises" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-red-600" fill="currentColor">
                            <path d="M0 80v48c0 17.7 14.3 32 32 32H48 96V80c0-26.5-21.5-48-48-48S0 53.5 0 80zM112 32c10 13.4 16 30 16 48V384c0 35.3 28.7 64 64 64s64-28.7 64-64v-5.3c0-32.4 26.3-58.7 58.7-58.7H480V128c0-53-43-96-96-96H112zM464 480c61.9 0 112-50.1 112-112c0-8.8-7.2-16-16-16H314.7c-14.7 0-26.7 11.9-26.7 26.7V384c0 53-43 96-96 96H368h96z"/>
                        </svg>
                        <span class="ml-3 whitespace-nowrap hidden md:block">Maîtrises et aptitudes</span>
                    </button>
                    <div id="tooltip-maitrises" role="tooltip" class="md:hidden inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip">
                        Maîtrises et aptitudes
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>
                <li>
                    <button data-tooltip-target="tooltip-levels" data-tooltip-placement="right" class="flex p-2 rounded-t-lg text-red-600" id="origine-tab" data-tabs-target="#origine" type="button" role="tab" aria-controls="levels" aria-selected="false">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512" class="flex-shrink-0 w-6 h-6 transition duration-75 group-hover:text-red-600" fill="currentColor">
                            <path d="M0 96C0 43 43 0 96 0h96V190.7c0 13.4 15.5 20.9 26 12.5L272 160l54 43.2c10.5 8.4 26 .9 26-12.5V0h32 32c17.7 0 32 14.3 32 32V352c0 17.7-14.3 32-32 32v64c17.7 0 32 14.3 32 32s-14.3 32-32 32H384 96c-53 0-96-43-96-96V96zM64 416c0 17.7 14.3 32 32 32H352V384H96c-17.7 0-32 14.3-32 32z"/>
                        </svg>
                        <span class="ml-3 whitespace-nowrap hidden md:block">Origine du personnage</span>
                    </button>
                    <div id="tooltip-levels" role="tooltip" class="md:hidden inline-block absolute invisible z-10 py-2 px-3 text-sm font-medium text-white bg-gray-500 rounded-lg shadow-sm opacity-0 tooltip">
                        Origine du personnage
                        <div class="tooltip-arrow" data-popper-arrow></div>
                    </div>
                </li>
            </ul>
        </div>

        <div id="myTabContent" class="mx-0.5">
            <div class="hidden p-4 rounded-lg bg-gray-800" id="infos" role="tabpanel" aria-labelledby="infos-tab">
                <p class="text-sm text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-800" id="stats" role="tabpanel" aria-labelledby="stats-tab">
                <p class="text-sm text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-800" id="attaques" role="tabpanel" aria-labelledby="attaques-tab">
                <p class="text-sm text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-800" id="maitrises" role="tabpanel" aria-labelledby="maitrises-tab">
                <p class="text-sm text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
            <div class="hidden p-4 rounded-lg bg-gray-800" id="origine" role="tabpanel" aria-labelledby="origine-tab">
                <p class="text-sm text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
            </div>
        </div>
    </div>
</x-app-layout>
