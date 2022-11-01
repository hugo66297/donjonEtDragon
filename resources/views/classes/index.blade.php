<x-app-layout>
    <div class="hidden sm:gap-4 sm:p-8 sm:grid grid-cols-2 grid-rows-6 md:grid-cols-3 md:grid-rows-4 lg:grid-cols-4 lg:grid-rows-3">
        <div class="block p-6 max-w-sm rounded-lg border border-gray-200 shadow-md bg-cover lg:h-36 md:h-40 h-44" style="background-image: url({{ asset('storage/img/classes/barbarian.jpg') }})">
            <span class="font-semibold text-white text-3xl">Barbare</span>
        </div>
    </div>

    {{--  Carroussel des classes pour le mobile  --}}
    <div id="controls-carousel" class="relative sm:hidden px-0.5" data-carousel="static">
        <!-- Carousel wrapper -->
        <div class="relative overflow-hidden rounded-lg h-60">
            <!-- Item 1 -->
            <div class="hidden duration-700 ease-in-out bg-cover" data-carousel-item="active" style="background-image: url({{ asset('storage/img/classes/barbarian.jpg') }})">
                <span class="z-10 absolute font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-3xl">Barbare</span>
            </div>
            <div class="hidden duration-700 ease-in-out bg-cover" data-carousel-item="active" style="background-image: url({{ asset('storage/img/classes/bard.jpg') }})">
                <span class="z-10 absolute font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-3xl">Barde</span>
            </div>
            <div class="hidden duration-700 ease-in-out bg-cover" data-carousel-item="active" style="background-image: url({{ asset('storage/img/classes/cleric.jpg') }})">
                <span class="z-10 absolute font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-3xl">Clerc</span>
            </div>
        </div>
        <!-- Slider controls -->
        <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/50 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
            <span class="sr-only">Previous</span>
        </span>
        </button>
        <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/50 group-focus:ring-4 group-focus:ring-white dark:group-focus:ring-gray-800/70 group-focus:outline-none">
            <svg aria-hidden="true" class="w-6 h-6 text-white dark:text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
            <span class="sr-only">Next</span>
        </span>
        </button>
    </div>
</x-app-layout>
