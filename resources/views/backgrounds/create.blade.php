<x-app-layout>
    <x-form-create title="Créer un historique" route="backgrounds.store">
        <div class="relative">
            <input type="text" id="name" name="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
            <label for="name" class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Nom de l'historique
            </label>
        </div>
        <div>
            <label for="description" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Description
            </label>
            <textarea id="description" name="description" rows="4" class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800" placeholder="Je suis convaincu..."></textarea>
        </div>
    </x-form-create>
</x-app-layout>
