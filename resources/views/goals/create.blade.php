<x-app-layout>
    <x-form-create title="Créer un objectif" route="goals.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'objectif"
            />
        </div>
        <div>
            <x-rich-text-editor
                name="description"
                label="Informations sur l'objectif"
                placeholder="Vous possédez une réserve limitée..."
            />
        </div>
    </x-form-create>
</x-app-layout>
