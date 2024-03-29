<x-app-layout>
    <h2 class="my-4 px-0.5 sm:px-8 text-xl sm:text-3xl tracking-tight leading-none md:text-4xl text-red-900 font-boldMedieval">
        Les classes de personnages
    </h2>
    <div class="hidden sm:gap-4 sm:px-8 sm:py-4 sm:grid grid-cols-2 grid-rows-6 md:grid-cols-3 md:grid-rows-4 lg:grid-cols-4 lg:grid-rows-3">
        @foreach($categories as $category)
            <a
                href="{{ route('characters.index', $category) }}"
                class="relative flex justify-center items-center p-6 h-44 max-w-sm rounded-lg border border-gray-200 shadow-md bg-cover grayscale transition ease-in-out duration-500 lg:h-36 md:h-40 hover:grayscale-0 hover:scale-105"
                style="background-image: url({{ asset($category->picture_path) }})"
            >
                <span
                    class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-800 border-2 border-white rounded-full -top-2 -right-2"
                >
                    {{ $category->characters_count }}
                </span>
                <span class="font-semibold text-white text-3xl">{{ $category->name }}</span>
            </a>
        @endforeach
    </div>

    {{--  Carroussel des categories pour le mobile  --}}
    <div class="mt-4">
        <div id="controls-carousel" class="relative sm:hidden px-0.5" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg h-60">
                @foreach($categories as $category)
                    <a
                        href="{{ route('characters.index', $category) }}"
                        class="hidden duration-700 ease-in-out bg-cover"
                        data-carousel-item="{{ $category->name === 'Barbare' ? 'active' : ''  }}"
                        style="background-image: url({{ asset($category->picture_path) }})"
                    >
                        <span
                            class="absolute inline-flex items-center justify-center w-6 h-6 text-xs font-bold text-white bg-red-800 border-2 border-white rounded-full top-2 right-2"
                        >
                            {{ $category->characters_count }}
                        </span>
                        <span class="z-10 absolute font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-3xl">{{ $category->name }}</span>
                    </a>
                @endforeach
            </div>
            <!-- Slider controls -->
            <button type="button" class="absolute top-0 left-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/50 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7"></path></svg>
                <span class="sr-only">Previous</span>
            </span>
            </button>
            <button type="button" class="absolute top-0 right-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
            <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/50 group-focus:ring-4 group-focus:ring-gray-800/70 group-focus:outline-none">
                <svg aria-hidden="true" class="w-6 h-6 text-gray-800" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7"></path></svg>
                <span class="sr-only">Next</span>
            </span>
            </button>
        </div>
    </div>
</x-app-layout>
