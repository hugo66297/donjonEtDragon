<x-app-layout>
    <x-form-create title="Créer une aventure" route="adventures.store">
        <div class="relative">
            <label for="name" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Nom de l'aventure
            </label>
            <x-input id="name" name="name" />
        </div>
        <div class="relative">
            <label for="abbrev" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Abbréviation
            </label>
            <x-input id="abbrev" name="abbreviation" />
        </div>
        <div class="relative flex justify-center space-x-8">
            <div class="flex flex-col items-center">
                <x-input
                    type="color"
                    name="bg_color"
                    label="Fond du badge"
                    value="#ffffff"
                />
            </div>
            <div class="flex flex-col items-center">
                <x-input
                    type="color"
                    name="text_color"
                    label="Texte du badge"
                    value="#000000"
                />
            </div>
            <div class="flex flex-col items-center">
                <p class="block text-lg font-medium text-red-800 font-titleMiddleAge">
                    Rendu du badge
                </p>
                <p id="preview" class="text-xs text-center font-medium px-2.5 py-0.5 mx-1 rounded">
                    LMOP
                </p>
            </div>
        </div>
    </x-form-create>
</x-app-layout>

<script>
    document.querySelector('#preview').style.backgroundColor = document.querySelector('#bg_color').value
    document.querySelector('#preview').style.color = document.querySelector('#text_color').value

    document.querySelector('#bg_color').addEventListener('input', () => {
        document.querySelector('#preview').style.backgroundColor = document.querySelector('#bg_color').value
    })

    document.querySelector('#text_color').addEventListener('input', () => {
        document.querySelector('#preview').style.color = document.querySelector('#text_color').value
    })
</script>
