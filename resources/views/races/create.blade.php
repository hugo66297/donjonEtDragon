<x-app-layout>
    <x-form-create title="Créer une race" route="races.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de la race"
            />
        </div>
        <div>
            <x-easy-mde
                label="Informations sur la race"
                name="description"
                placeholder="Vous possédez une réserve limitée..."
            ></x-easy-mde>
        </div>
        <div>
            <x-easy-mde
                label="Noms populaires dans cette race"
                name="example_surname"
                placeholder="Vous possédez une réserve limitée..."
            ></x-easy-mde>
        </div>
    </x-form-create>
</x-app-layout>
