<x-app-layout>
    <x-form-create title="Créer une aptitude" route="features.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'aptitude"
            />
        </div>
        <div>
            <x-easy-mde
                name="description"
                placeholder="Vous possédez une réserve limitée..."
                label="Informations sur l'aptitude"
            ></x-easy-mde>
        </div>
    </x-form-create>
</x-app-layout>
