<div id="step-div-2" class="hidden p-4 space-y-8">
    <div id="div-weapons">
        <div class="relative">
            <label for="armes" class="font-titleMiddleAge text-sm text-red-800">
                Armes
            </label>
            <div>
                <input
                    type="text"
                    id="dropdownSearchButton"
                    data-dropdown-toggle="dropdownWeaponsSearch"
                    data-dropdown-placement="bottom"
                    placeholder="Choisis ses armes"
                    class="p-2.5 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800"
                />
                <div id="dropdownWeaponsSearch" class="z-10 hidden bg-[#f8f8f8] w-full rounded-lg shadow">
                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700" aria-labelledby="dropdownSearchButton">
                        @foreach($weapons as $weapon)
                            <li>
                                <div class="flex items-center pl-2 py-2 rounded">
                                    <input
                                        type="checkbox"
                                        name="weapons[]"
                                        id="{{$weapon->getKey()}}"
                                        value="{{$weapon->getKey()}}"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2"
                                    >
                                    <label for="{{$weapon->getKey()}}" class="ml-2 text-sm font-medium text-gray-900 hover:cursor-pointer">
                                        {{ucfirst($weapon->name)}}
                                    </label>
                                </div>
                                <p class="text-gray-500 ml-8">
                                    {{ $weapon->fullDescription() }}
                                </p>
                            </li>
                        @endforeach
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="div-attacks">
        <div class="relative overflow-x-auto table-auto shadow-md sm:rounded-lg">
            <table
                id="table-attacks"
                class="w-full text-sm text-left text-gray-400"
                x-data="{ component: [] }"
                x-init="component = $refs.tbody.querySelector('tr')"
            >
                <thead class="text-xs uppercase bg-gray-900">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom de l'attaque
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Description
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Action
                    </th>
                </tr>
                </thead>
                <tbody x-ref="tbody">
                <tr x-data="" x-ref="line" class="border-b">
                    <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                        <select onchange="disabledDescription(this)" id="attack_id" name="attackIds[]"
                                class="block w-full px-2.5 pb-2.5 pt-4 text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800">
                            <option value="">Choisis une option</option>
                            @foreach($attacks as $attack)
                                <option value="{{$attack->getKey()}}">{{$attack->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="px-6 py-4">
                                <textarea id="attack_description" name="attackDescriptions[]" rows="4"
                                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800"
                                          placeholder="Je suis convaincu..."></textarea>
                    </td>
                    <td class="px-6 py-4">
                        <button
                            type="button"
                            class="font-bold text-red-800 hover:underline cursor-pointer"
                            @click.prevent="$el.parentNode.parentNode.remove()"
                        >
                            Supprimer
                        </button>
                    </td>
                </tr>
                </tbody>
                <tfoot>
                <tr class="font-semibold text-gray-900">
                    <th id="add-line" scope="row" colspan="5" class="px-6 py-3">
                        <div class="font-bold text-red-800 flex justify-end">
                            <p
                                class="w-fit cursor-pointer hover:underline"
                                @click="elt = document.createElement('tr');
                                                    elt.innerHTML = component.innerHTML;
                                                    elt.classList = component.classList
                                                    $refs.tbody.appendChild(elt)"
                            >
                                Ajouter une ligne
                            </p>
                        </div>
                    </th>
                </tr>
                </tfoot>
            </table>
        </div>
    </div>
</div>

<script>
    let attacks = {!! $attacks !!};

    function disabledDescription(select) {
        let attack = attacks.find(elt => elt.id === select.value)
        let textArea = select.parentNode.parentNode.querySelector('textarea')
        if (attack.description) {
            textArea.setAttribute('readonly', '')
            textArea.classList.add('cursor-not-allowed')
            if (textArea.value) {
                textArea.value = ''
            }
        } else {
            textArea.removeAttribute('readonly')
            textArea.classList.remove('cursor-not-allowed')
        }
    }
</script>