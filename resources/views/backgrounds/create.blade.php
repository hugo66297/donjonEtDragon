<x-app-layout>
    <x-form-create title="Créer un historique" route="backgrounds.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'historique"
            />
        </div>
        <div>
            <x-rich-text-editor
                id="description"
                name="description"
                label="Informations sur l'historique"
                placeholder="Vous venez d’une famille habituée à la richesse, au pouvoir et aux privilèges..."
            />
        </div>
    </x-form-create>
</x-app-layout>
