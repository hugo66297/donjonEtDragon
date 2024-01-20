<x-app-layout>
    <ol class="flex items-center sm:w-4/5 sm:ml-[10%] p-4">
        <li id="step-1"
            class="active flex w-full items-center after:content-[''] after:w-full after:border-b border-gray after:border-4">
            <span class="flex items-center justify-center w-10 h-10 bg-red-800 rounded-full lg:h-12 lg:w-12 shrink-0">
                <svg id="step-0-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                     class="w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M64 32C28.7 32 0 60.7 0 96V416c0 35.3 28.7 64 64 64H512c35.3 0 64-28.7 64-64V96c0-35.3-28.7-64-64-64H64zm80 256h64c44.2 0 80 35.8 80 80c0 8.8-7.2 16-16 16H80c-8.8 0-16-7.2-16-16c0-44.2 35.8-80 80-80zm96-96c0 35.3-28.7 64-64 64s-64-28.7-64-64s28.7-64 64-64s64 28.7 64 64zm128-32H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16zm0 64H496c8.8 0 16 7.2 16 16s-7.2 16-16 16H368c-8.8 0-16-7.2-16-16s7.2-16 16-16z"/>
                </svg>
                <svg id="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                     class="hidden w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </span>
        </li>
        <li id="step-2"
            class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b border-gray after:border-4 after:inline-block">
            <span class="flex items-center justify-center w-10 h-10 bg-gray-700 rounded-full lg:h-12 lg:w-12 shrink-0">
                <svg id="step-1-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"
                     class="w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M160 80c0-26.5 21.5-48 48-48h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H208c-26.5 0-48-21.5-48-48V80zM0 272c0-26.5 21.5-48 48-48H80c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H48c-26.5 0-48-21.5-48-48V272zM368 96h32c26.5 0 48 21.5 48 48V432c0 26.5-21.5 48-48 48H368c-26.5 0-48-21.5-48-48V144c0-26.5 21.5-48 48-48z"/>
                </svg>
                <svg id="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                     class="hidden w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </span>
        </li>
        <li id="step-3"
            class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b border-gray after:border-4 after:inline-block">
            <span class="flex items-center justify-center w-10 h-10 bg-gray-700 rounded-full lg:h-12 lg:w-12 shrink-0">
                <svg id="step-2-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                     class="w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M464 6.1c9.5-8.5 24-8.1 33 .9l8 8c9 9 9.4 23.5 .9 33l-85.8 95.9c-2.6 2.9-4.1 6.7-4.1 10.7V176c0 8.8-7.2 16-16 16H384.2c-4.6 0-8.9 1.9-11.9 5.3L100.7 500.9C94.3 508 85.3 512 75.8 512c-8.8 0-17.3-3.5-23.5-9.8L9.7 459.7C3.5 453.4 0 445 0 436.2c0-9.5 4-18.5 11.1-24.8l111.6-99.8c3.4-3 5.3-7.4 5.3-11.9V272c0-8.8 7.2-16 16-16h34.6c3.9 0 7.7-1.5 10.7-4.1L464 6.1zM432 288c3.6 0 6.7 2.4 7.7 5.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8-14.8 51.7c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8l-14.8-51.7-51.7-14.8c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8 14.8-51.7c1-3.4 4.1-5.8 7.7-5.8zM87.7 69.8l14.8 51.7 51.7 14.8c3.4 1 5.8 4.1 5.8 7.7s-2.4 6.7-5.8 7.7l-51.7 14.8L87.7 218.2c-1 3.4-4.1 5.8-7.7 5.8s-6.7-2.4-7.7-5.8L57.5 166.5 5.8 151.7c-3.4-1-5.8-4.1-5.8-7.7s2.4-6.7 5.8-7.7l51.7-14.8L72.3 69.8c1-3.4 4.1-5.8 7.7-5.8s6.7 2.4 7.7 5.8zM224 0c3.7 0 6.9 2.5 7.8 6.1l6.8 27.3 27.3 6.8c3.6 .9 6.1 4.1 6.1 7.8s-2.5 6.9-6.1 7.8l-27.3 6.8-6.8 27.3c-.9 3.6-4.1 6.1-7.8 6.1s-6.9-2.5-7.8-6.1l-6.8-27.3-27.3-6.8c-3.6-.9-6.1-4.1-6.1-7.8s2.5-6.9 6.1-7.8l27.3-6.8 6.8-27.3c.9-3.6 4.1-6.1 7.8-6.1z"/>
                </svg>
                <svg id="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                     class="hidden w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </span>
        </li>
        <li id="step-4"
            class="flex w-full items-center after:content-[''] after:w-full after:h-1 after:border-b border-gray after:border-4 after:inline-block">
            <span class="flex items-center justify-center w-10 h-10 bg-gray-700 rounded-full lg:h-12 lg:w-12 shrink-0">
                <svg id="step-3-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512"
                     class="w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M0 80v48c0 17.7 14.3 32 32 32H48 96V80c0-26.5-21.5-48-48-48S0 53.5 0 80zM112 32c10 13.4 16 30 16 48V384c0 35.3 28.7 64 64 64s64-28.7 64-64v-5.3c0-32.4 26.3-58.7 58.7-58.7H480V128c0-53-43-96-96-96H112zM464 480c61.9 0 112-50.1 112-112c0-8.8-7.2-16-16-16H314.7c-14.7 0-26.7 11.9-26.7 26.7V384c0 53-43 96-96 96H368h96z"/>
                </svg>
                <svg id="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                     class="hidden w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </span>
        </li>
        <li id="step-5" class="flex items-center">
            <span class="flex items-center justify-center w-10 h-10 bg-gray-700 rounded-full lg:h-12 lg:w-12 shrink-0">
                <svg id="step-4-icon" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                     class="w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M512 80c0 18-14.3 34.6-38.4 48c-29.1 16.1-72.5 27.5-122.3 30.9c-3.7-1.8-7.4-3.5-11.3-5C300.6 137.4 248.2 128 192 128c-8.3 0-16.4 .2-24.5 .6l-1.1-.6C142.3 114.6 128 98 128 80c0-44.2 86-80 192-80S512 35.8 512 80zM160.7 161.1c10.2-.7 20.7-1.1 31.3-1.1c62.2 0 117.4 12.3 152.5 31.4C369.3 204.9 384 221.7 384 240c0 4-.7 7.9-2.1 11.7c-4.6 13.2-17 25.3-35 35.5c0 0 0 0 0 0c-.1 .1-.3 .1-.4 .2l0 0 0 0c-.3 .2-.6 .3-.9 .5c-35 19.4-90.8 32-153.6 32c-59.6 0-112.9-11.3-148.2-29.1c-1.9-.9-3.7-1.9-5.5-2.9C14.3 274.6 0 258 0 240c0-34.8 53.4-64.5 128-75.4c10.5-1.5 21.4-2.7 32.7-3.5zM416 240c0-21.9-10.6-39.9-24.1-53.4c28.3-4.4 54.2-11.4 76.2-20.5c16.3-6.8 31.5-15.2 43.9-25.5V176c0 19.3-16.5 37.1-43.8 50.9c-14.6 7.4-32.4 13.7-52.4 18.5c.1-1.8 .2-3.5 .2-5.3zm-32 96c0 18-14.3 34.6-38.4 48c-1.8 1-3.6 1.9-5.5 2.9C304.9 404.7 251.6 416 192 416c-62.8 0-118.6-12.6-153.6-32C14.3 370.6 0 354 0 336V300.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 342.6 135.8 352 192 352s108.6-9.4 148.1-25.9c7.8-3.2 15.3-6.9 22.4-10.9c6.1-3.4 11.8-7.2 17.2-11.2c1.5-1.1 2.9-2.3 4.3-3.4V304v5.7V336zm32 0V304 278.1c19-4.2 36.5-9.5 52.1-16c16.3-6.8 31.5-15.2 43.9-25.5V272c0 10.5-5 21-14.9 30.9c-16.3 16.3-45 29.7-81.3 38.4c.1-1.7 .2-3.5 .2-5.3zM192 448c56.2 0 108.6-9.4 148.1-25.9c16.3-6.8 31.5-15.2 43.9-25.5V432c0 44.2-86 80-192 80S0 476.2 0 432V396.6c12.5 10.3 27.6 18.7 43.9 25.5C83.4 438.6 135.8 448 192 448z"/>
                </svg>
                <svg id="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512"
                     class="hidden w-5 h-5 text-gray-100 lg:w-6 lg:h-6" fill="currentColor">
                    <path
                        d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </span>
        </li>
    </ol>

    <form action="{{route('heroes.store')}}" method="post" id="form-perso">
        @csrf
        <x-form.step-one
            :categories="$categories"
            :adventures="$adventures"
            :alignments="$alignments"
            :goals="$goals"
            :backgrounds="$backgrounds"
            :subRaces="$subRaces"
        />
        <x-form.step-two />
        <x-form.step-three />
        <x-form.step-four />
        <x-form.step-five />
        <div class="flex items-center justify-center space-x-8 p-4">
            <div id="prev"
                 class="hidden inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer">
                <p class="hidden sm:block">Étape précédente</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6 sm:hidden">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M19.5 12h-15m0 0l6.75 6.75M4.5 12l6.75-6.75"/>
                </svg>
            </div>
            <div id="next"
                 class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer">
                <p class="hidden sm:block">Étape suivante</p>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                     stroke="currentColor" class="w-6 h-6 sm:hidden">
                    <path stroke-linecap="round" stroke-linejoin="round"
                          d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"/>
                </svg>
            </div>
            <button
                id="finish"
                type="submit"
                class="hidden inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 active:bg-gray-900 disabled:opacity-25 transition ease-in-out duration-150 cursor-pointer"
            >
                <span class="hidden sm:block">Terminer</span>
                <svg id="check" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512" class="w-6 h-6 sm:hidden"
                     fill="currentColor">
                    <path
                        d="M470.6 105.4c12.5 12.5 12.5 32.8 0 45.3l-256 256c-12.5 12.5-32.8 12.5-45.3 0l-128-128c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0L192 338.7 425.4 105.4c12.5-12.5 32.8-12.5 45.3 0z"/>
                </svg>
            </button>
        </div>
    </form>
</x-app-layout>
