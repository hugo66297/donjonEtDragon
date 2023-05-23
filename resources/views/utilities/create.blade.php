<x-app-layout>
    <x-form-create title="Créer une maîtrise" route="utilities.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de la maîtrise"
            />
        </div>

        <livewire:datatable.advanced-datatable
            :collections="[\App\Models\Attack::all()]"
            :headings="['Nom de attaque', 'Description']"
            :names="['weapons']"
            :fields="['character_id', 'attack_id', 'other_description']"
        />
    </x-form-create>
</x-app-layout>
