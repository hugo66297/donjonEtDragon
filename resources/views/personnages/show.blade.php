<x-app-layout>
    <nav class="flex my-2 px-0.5 sm:px-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Accueil
                </a>
            </li>
            <li aria-current="page" class="inline-flex items-center">
                <a href="{{ route('categories.index') }}" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path>
                    </svg>
                    <span class="ml-1 text-sm font-medium md:ml-2 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black">Classes</span>
                </a>
            </li>
            <li aria-current="page" class="inline-flex items-center">
                <a href="" class="inline-flex items-center text-sm font-medium text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium md:ml-2 text-gray-700 hover:text-gray-900 dark:text-gray-400 dark:hover:text-black">Personnages</span>
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium text-red-500 md:ml-2 dark:text-red-400">Nom du perso</span>
                </div>
            </li>
        </ol>
    </nav>
    <div class="mb-4">
        <ul class="flex flex-wrap flex-col sm:flex-row justify-center -mb-px text-sm font-medium text-center" id="myTab" data-tabs-toggle="#myTabContent" role="tablist">
            <li class="mr-2" role="presentation">
                <button class="inline-block p-2 rounded-t-lg border-b-2 text-red-600 border-red-600 hover:text-red-600" id="infos-tab" data-tabs-target="#profile" type="button" role="tab" aria-controls="profile" aria-selected="false">Informations globales</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-2 rounded-t-lg border-b-2 text-red-600 border-red-600 hover:text-red-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="primaires-tab" data-tabs-target="#dashboard" type="button" role="tab" aria-controls="dashboard" aria-selected="false">Statistiques primaires</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-2 rounded-t-lg border-b-2 text-red-600 border-red-600 hover:text-red-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="secondaires-tab" data-tabs-target="#settings" type="button" role="tab" aria-controls="settings" aria-selected="false">Statistiques secondaires</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-2 rounded-t-lg border-b-2 text-red-600 border-red-600 hover:text-red-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="armes-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Armes et équipements</button>
            </li>
            <li class="mr-2" role="presentation">
                <button class="inline-block p-2 rounded-t-lg border-b-2 text-red-600 border-red-600 hover:text-red-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="maitrises-tab" data-tabs-target="#contacts" type="button" role="tab" aria-controls="contacts" aria-selected="false">Maîtrises et aptitudes</button>
            </li>
            <li role="presentation">
                <button class="inline-block p-2 rounded-t-lg border-b-2 text-red-600 border-red-600 hover:text-red-600 hover:text-gray-600 hover:border-gray-300 dark:hover:text-gray-300" id="levels-tab" data-tabs-target="#test" type="button" role="tab" aria-controls="test" aria-selected="false">Monter de niveau</button>
            </li>
        </ul>
    </div>
    <div id="myTabContent">
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="profile" role="tabpanel" aria-labelledby="infos-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Profile tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="dashboard" role="tabpanel" aria-labelledby="primaires-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Dashboard tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="settings" role="tabpanel" aria-labelledby="secondaires-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Settings tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="armes-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="contacts" role="tabpanel" aria-labelledby="maitrises-tab-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
        <div class="hidden p-4 bg-gray-50 rounded-lg dark:bg-gray-800" id="test" role="tabpanel" aria-labelledby="levels-tab-tab">
            <p class="text-sm text-gray-500 dark:text-gray-400">This is some placeholder content the <strong class="font-medium text-gray-800 dark:text-white">Contacts tab's associated content</strong>. Clicking another tab will toggle the visibility of this one for the next. The tab JavaScript swaps classes to control the content visibility and styling.</p>
        </div>
    </div>
</x-app-layout>
