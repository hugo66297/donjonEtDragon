<x-app-layout>
    <x-form-create title="Créer un historique" route="backgrounds.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'historique"
            />
        </div>
        <div>
            <label for="description" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Informations sur l'historique
            </label>
            <x-easy-mde name="description" placeholder="Vous venez d’une famille habituée à la richesse, au pouvoir et aux privilèges..."></x-easy-mde>
        </div>
    </x-form-create>
</x-app-layout>
