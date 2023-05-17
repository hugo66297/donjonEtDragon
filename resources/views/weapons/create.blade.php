<x-app-layout>
    <x-form-create title="Créer une arme" route="weapons.store">
        <div class="relative">
            <x-input
                name="name"
                label="Nom de l'arme"
            />
        </div>
        <div class="relative">
            <x-input
                name="atk_bonus"
                label="Puissance bonus"
            />
        </div>
        <div class="relative">
            <x-input
                name="damage_type"
                label="Type de dommage"
            />
        </div>
        <div class="relative">
            <x-input
                type="textarea"
                name="sub_infos"
                label="Informations supplémentaires"
            />
        </div>
    </x-form-create>
</x-app-layout>
