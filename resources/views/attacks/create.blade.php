<x-app-layout>
    <x-form-create title="Créer une attaque" route="attacks.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'attaque"
            />
        </div>
        <div>
            <x-easy-mde
                name="description"
                placeholder="Tour de magie"
                label="Informations sur l'attaque"
            ></x-easy-mde>
        </div>
    </x-form-create>
</x-app-layout>
