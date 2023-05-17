<x-app-layout>
    <x-form-create title="Créer un objectif" route="goals.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'objectif"
            />
        </div>
        <div>
            <x-easy-mde
                name="description"
                placeholder="Vous possédez une réserve limitée..."
                label="Informations sur l'objectif"
            ></x-easy-mde>
        </div>
    </x-form-create>
</x-app-layout>
