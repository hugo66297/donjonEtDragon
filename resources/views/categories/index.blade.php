<x-app-layout>

    <nav class="flex my-2 px-0.5 sm:px-8" aria-label="Breadcrumb">
        <ol class="inline-flex items-center space-x-1 md:space-x-3">
            <li class="inline-flex items-center">
                <a href="{{ route('home') }}" class="inline-flex items-center text-sm font-medium hover:text-gray-900 text-gray-400">
                    <svg class="mr-2 w-4 h-4" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10.707 2.293a1 1 0 00-1.414 0l-7 7a1 1 0 001.414 1.414L4 10.414V17a1 1 0 001 1h2a1 1 0 001-1v-2a1 1 0 011-1h2a1 1 0 011 1v2a1 1 0 001 1h2a1 1 0 001-1v-6.586l.293.293a1 1 0 001.414-1.414l-7-7z"></path></svg>
                    Accueil
                </a>
            </li>
            <li aria-current="page">
                <div class="flex items-center">
                    <svg class="w-6 h-6 text-gray-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M7.293 14.707a1 1 0 010-1.414L10.586 10 7.293 6.707a1 1 0 011.414-1.414l4 4a1 1 0 010 1.414l-4 4a1 1 0 01-1.414 0z" clip-rule="evenodd"></path></svg>
                    <span class="ml-1 text-sm font-medium md:ml-2 text-red-400">Classes</span>
                </div>
            </li>
        </ol>
    </nav>
    <h2 class="my-4 px-0.5 sm:px-8 text-xl sm:text-3xl font-extrabold tracking-tight leading-none md:text-4xl text-red-900">Les classes de personnages</h2>
    <div class="hidden sm:gap-4 sm:px-8 sm:py-4 sm:grid grid-cols-2 grid-rows-6 md:grid-cols-3 md:grid-rows-4 lg:grid-cols-4 lg:grid-rows-3">
        @foreach($categories as $categorie)
            <a href="{{ route('personnages.index', $categorie) }}" class="transition ease-in-out duration-500 block p-6 max-w-sm rounded-lg border border-gray-200 shadow-md bg-cover lg:h-36 md:h-40 h-44 grayscale hover:grayscale-0 hover:scale-105" style="background-image: url({{ asset($categorie->picture_path) }})">
                <span class="font-semibold text-white text-3xl">{{ $categorie->name }}</span>
            </a>
        @endforeach
    </div>

    {{--  Carroussel des categories pour le mobile  --}}
    <div class="mt-4">
        <div id="controls-carousel" class="relative sm:hidden px-0.5" data-carousel="slide">
            <!-- Carousel wrapper -->
            <div class="relative overflow-hidden rounded-lg h-60">
                @foreach($categories as $categorie)
                    <a href="{{ route('personnages.index', $categorie) }}" class="hidden duration-700 ease-in-out bg-cover" data-carousel-item="{{ $categorie->name === 'Barbare' ?'active' : ''  }}" style="background-image: url({{ asset($categorie->picture_path) }})">
                        <span class="z-10 absolute font-semibold text-white -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2 text-3xl">{{ $categorie->name }}</span>
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
