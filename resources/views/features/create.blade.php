<x-app-layout>
    <x-form-create title="Créer une aptitude" route="features.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'aptitude"
            />
        </div>
        <div>
            <x-rich-text-editor
                id="description"
                name="description"
                label="Informations sur l'aptitude"
                placeholder="Vous possédez une réserve limitée..."
            />
        </div>
    </x-form-create>
</x-app-layout>
