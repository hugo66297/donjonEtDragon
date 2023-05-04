<x-app-layout>
    <x-form-create title="Créer une aventure" route="adventures.store">
        <div class="relative">
            <input type="text" id="name" name="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
            <label for="name" class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Nom de l'aventure
            </label>
        </div>
        <div class="relative">
            <input type="text" id="abbrev" name="abbreviation" class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
            <label for="abbrev" class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Abbréviation
            </label>
        </div>
        <div class="relative flex">
            <div>
                <x-color-picker
                    label="Couleur de fond"
                    placeholder="Choisis une couleur"
                    name="bg_color"
                />
            </div>
            <div>
                <x-color-picker
                    label="Couleur du texte"
                    placeholder="Choisis une couleur"
                    name="text_color"
                />
            </div>
        </div>
    </x-form-create>
</x-app-layout>
