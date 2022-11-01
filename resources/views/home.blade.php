<x-app-layout>
    <div class="h-full md:h-[100vh] bg-cover bg-center flex flex-col justify-center items-center gap-8 border-b-2 border-red-700" style="background-image: url('{{ asset('storage/img/home-hero-image.jpg') }}');">
        <div class="max-w-md bg-[#e7e7db] rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="storage/img/whydd.jpg" alt="Modern building architecture">
                </div>
                <div class="p-4 text-justify">
                    <p class="mt-1 text-slate-500">
                        Donjon et dragon est un jeu de rôle qui pousse les joueurs à créer, s’aventurer et évoluer dans un monde dans lequel ils
                        choisissent leurs propres destins face à des situations complexes ou des monstres hostiles mais pas que : en fonction des
                        différents maitres de jeu, ils peuvent être confronté à des énigmes, des défis et bien plus encore. Nous vous présentons ici
                        4 bonnes raisons et pourquoi vous lancer dans une aventure D&D...
                    </p>
                    <div class="mt-5 flex items-center justify-end text-lg leading-tight font-medium text-black text-right">
                        <a href="#" class="hover:underline">
                            Plus de détails
                        </a>
                        <span class="ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
        <div class="max-w-md bg-[#e7e7db] rounded-xl shadow-md overflow-hidden md:max-w-2xl">
            <div class="md:flex">
                <div class="md:shrink-0">
                    <img class="h-48 w-full object-cover md:h-full md:w-48" src="storage/img/Lost_Mine_of_Phandelver.jpg" alt="Modern building architecture">
                </div>
                <div class="p-4 text-justify">
                    <p class="mt-1 text-slate-500">
                        La mine perdue de Phancreux : « Lost mine of Phandelver » est un scénario plutôt court, en 4 parties pour un
                        total d’environ 40h de jeu. Dans ce scénario vous trouverez tous les aspects de Donjon et Dragon à savoir : de
                        l’exploration : en forêt, en ville ou même en donjon... mais aussi du roleplay : discussions avec des PNJ (personnages
                        non joueurs) avec des bandits ou autres scélérats et bien-sûr des combats : de nombreuses embuscades, pièges, donjons
                        et défies vous attendent… Peux-être même un dragon, qui sait…
                    </p>
                    <div class="mt-5 flex items-center justify-end text-lg leading-tight font-medium text-black text-right">
                        <a href="#" class="hover:underline">
                            Plus de détails
                        </a>
                        <span class="ml-1">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 4.5L21 12m0 0l-7.5 7.5M21 12H3" />
                            </svg>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="h-full md:h-[100vh] bg-cover bg-center flex flex-col justify-center items-center gap-8 border-t-2 border-red-700" style="background-image: url('{{ asset('storage/img/bg-media-gallery.jpg') }}');">

    </div>

    <x-footer/>
</x-app-layout>
