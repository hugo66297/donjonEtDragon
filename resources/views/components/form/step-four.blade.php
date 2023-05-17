<div id="step-div-3" class="hidden p-4 space-y-8">
    <div class="flex items-center space-x-4">
        <div class="relative">
            <x-input
                type="number"
                name="hero[proficiency_bonus]"
                value="2"
                label="Bonus de maitrise"
            />
        </div>
    </div>
    <div id="div-feature" class="">
        <x-multiple-select
            :data="$features"
            label="Aptitudes"
            name="features"
            placeholder="Choisis des aptitudes"
            dropdown="dropdownFeatures"
        />
    </div>
    <div id="div-maitrise" class="">
        <div class="relative overflow-x-auto table-auto shadow-md sm:rounded-md">
            <table
                id="table-maitrises"
                class="w-full text-sm text-left text-gray-400"
                x-data="{ component: [] }"
                x-init="component = $refs.tbody.querySelector('tr')"
            >
                <thead class="text-xs uppercase bg-gray-900">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nom de la maîtrise
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
                        <select id="maitrise_id" name="maitriseIds[]"
                                class="block w-full p-2 text-sm bg-transparent rounded-md border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800">
                            <option value="">Choisis une option</option>
                            @foreach($utilities as $utility)
                                <option value="{{$utility->getKey()}}">{{$utility->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="px-6 py-4">
                                <textarea id="maitrise_description" name="maitriseDescriptions[]" rows="4"
                                          class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-md border border-gray-600 border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800"
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
                    <th id="add-line" scope="row" colspan="3" class="px-6 py-3 text-right">
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
