<x-app-layout>
    <x-form-create title="Créer une attaque" route="attacks.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'attaque"
            />
        </div>
        <div>
            <x-rich-text-editor
                id="description"
                name="description"
                label="Informations sur l'attaque"
                placeholder="Tour de magie"
            />
        </div>
    </x-form-create>
</x-app-layout>
