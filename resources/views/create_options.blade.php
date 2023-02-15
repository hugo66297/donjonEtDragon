<x-app-layout>
    <h2 class="text-3xl font-normalMedieval text-red-900 text-center p-4">Choisis ce que tu veux ajouter</h2>
    <div class="grid grid-cols-2 items-center justify-center w-4/5 ml-[10%] p-4">
        <h2 class="text-2xl font-titleMiddleAge text-red-900 text-center p-4">
            Personnage
        </h2>
        <h2 class="text-2xl font-titleMiddleAge text-red-900 text-center p-4">
            Autre
        </h2>
        <a href="{{route('heroes.create')}}" class="flex justify-center">
            <img src="{{asset('/storage/img/add_perso.png')}}" alt="button add perso" class="w-64 border rounded-lg shadow-md p-2 hover:scale-105 transition">
        </a>
        <div class="grid grid-cols-3 gap-8 font-titleMiddleAge text-2xl text-red-800">
            <a href="{{route('adventures.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Aventure
            </a>
            <a href="{{route('goals.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Objectif
            </a>
            <a href="{{route('races.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Race
            </a>
            <a href="{{route('subraces.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Sous-race
            </a>
            <a href="{{route('backgrounds.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Historique
            </a>
            <a href="{{route('features.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Aptitude
            </a>
            <a href="{{route('attacks.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Attaque
            </a>
            <a href="{{route('weapons.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Arme
            </a>
            <a href="{{route('utilities.create')}}" class="shadow-md border rounded-lg text-center p-2 hover:scale-105 transition">
                Maîtrise
            </a>
        </div>
    </div>
</x-app-layout>
