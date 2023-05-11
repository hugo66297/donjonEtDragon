<x-app-layout>
    <x-form-create title="Créer une sous-race" route="subraces.store">
        <div class="relative">
            <input type="text" id="name" name="name" class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer" placeholder=" " />
            <label for="name" class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Nom de la sous-race
            </label>
        </div>
        <div>
            <label for="description" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Informations sur la sous-race
            </label>
            <x-easy-mde name="description" placeholder="Vous possédez une réserve limitée..."></x-easy-mde>
        </div>
        <div class="relative">
            <label for="race_id" class="font-titleMiddleAge text-sm text-red-800">
                Races
            </label>
            <select id="race_id" name="race_id" class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800">
                <option value="">Choisis une race</option>
                @foreach($races as $race)
                    <option value="{{$race->getKey()}}">{{$race->name}}</option>
                @endforeach
            </select>
        </div>
        <label class="relative inline-flex items-center cursor-pointer">
            <input type="checkbox" id="is_after" name="is_after" value="" class="sr-only peer">
            <div class="w-11 h-6 peer-focus:outline-none rounded-full peer bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-800"></div>
            <span class="ml-3 text-sm font-medium text-gray-900">Nom avant la race ?</span>
        </label>
    </x-form-create>
</x-app-layout>
