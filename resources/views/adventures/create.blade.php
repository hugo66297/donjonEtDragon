<x-app-layout>
    <x-form-create title="Créer une aventure" route="adventures.store">
        <div class="relative">
            <label for="name" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Nom de l'aventure
            </label>
            <x-input id="name" name="name" />
        </div>
        <div class="relative">
            <label for="abbrev" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Abbréviation
            </label>
            <x-input id="abbrev" name="abbreviation" />
        </div>
        <div class="relative flex justify-center space-x-8">
            <div class="flex flex-col items-center">
                <label for="abbrev" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                    Abbréviation
                </label>
                <x-color-picker
                    value="#fff"
                    name="bg_color"
                />
            </div>
            <div class="flex flex-col items-center">
                <label for="abbrev" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                    Abbréviation
                </label>
                <x-color-picker
                    value="#fff"
                    name="text_color"
                />
            </div>
        </div>
    </x-form-create>
</x-app-layout>
