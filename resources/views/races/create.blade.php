<x-app-layout>
    <x-form-create title="Créer une race" route="races.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de la race"
            />
        </div>
        <div>
            <x-rich-text-editor
                id="description"
                name="description"
                label="Informations sur la race"
                placeholder="Vous possédez une réserve limitée..."
            />
        </div>
        <div>
            <x-rich-text-editor
                id="example_surname"
                name="example_surname"
                label="Noms populaires dans cette race"
                placeholder="Vous possédez une réserve limitée..."
            />
        </div>
    </x-form-create>
</x-app-layout>
