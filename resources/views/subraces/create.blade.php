<x-app-layout>
    <x-form-create title="Créer une sous-race" route="subraces.store">
        <div class="relative">
            <x-select
                :data="$races"
                label="Race"
                name="race_id"
                placeholder="Choisis une race"
                dropdown="dropdownRaces"
            />
        </div>
        <div class="relative">
            <x-input
                name="name"
                label="Nom de la sous-race"
            />
        </div>
        <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" id="is_after" name="is_after" value="" class="sr-only peer">
            <div class="w-11 h-6 peer-focus:outline-none rounded-full peer bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-800"></div>
            <span class="ml-3 text-sm font-medium text-gray-900">Nom avant la race ?</span>
        </label>
        <div>
            <x-rich-text-editor
                id="description"
                name="description"
                label="Informations sur la sous-race"
                placeholder="Vous possédez une réserve limitée..."
            />
        </div>
    </x-form-create>
</x-app-layout>
