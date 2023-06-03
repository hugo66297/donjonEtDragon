<div id="step-div-3" class="hidden p-4 space-y-8">
    <div class="flex items-center space-x-4">
        <div class="relative">
            <x-input
                type="number"
                name="hero[proficiency_bonus]"
                value="2"
                label="Bonus de maitrise"
                required
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
        <x-form-alert error="features" />
    </div>
    <div id="div-maitrise" class="">
        <p class="font-titleMiddleAge text-red-800">
            Maitrises
            <i class="fa-solid fa-circle-info" data-tooltip-target="tooltip-utilities"></i>
        </p>
        <div id="tooltip-utilities" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Si le personnage n'a pas de maitrise, vous devez enlever la ligne
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="relative overflow-x-auto table-auto shadow-md sm:rounded-md">
            <table
                id="table-maitrises"
                class="w-full text-sm text-left text-white"
                x-data="{ component: [] }"
                x-init="component = $refs.tbody.querySelector('tr')"
            >
                <thead class="text-xs uppercase bg-gray-700">
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
                @if(!old('utilities'))
                    <tr x-data="" x-ref="line" class="border-b">
                        <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                            @php $key = \Illuminate\Support\Str::uuid(); @endphp
                            <select
                                id="maitrise_id"
                                name="utilities[{{ $key }}][utility_id]"
                                class="py-2 px-3 w-full bg-white flex justify-between text-sm cursor-pointer rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-600 focus:ring-inset"
                            >
                                <option value="">Choisis une option</option>
                                @foreach($utilities as $utility)
                                    <option value="{{$utility->getKey()}}">{{$utility->name}}</option>
                                @endforeach
                            </select>
                        </td>
                        <td class="px-6 py-4">
                            <textarea
                                id="maitrise_description"
                                name="utilities[{{ $key }}][description]"
                                rows="4"
                                class="block w-full text-sm text-black rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-800 focus:ring-inset"
                                placeholder="Je suis convaincu..."
                            ></textarea>
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
                @else
                    @foreach(old('utilities') as $oldUtility)
                        <tr x-data="" x-ref="line" class="border-b">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                @php $key = \Illuminate\Support\Str::uuid(); @endphp
                                <select
                                    id="maitrise_id"
                                    name="utilities[{{ $key }}][utility_id]"
                                    class="py-2 px-3 w-full bg-white flex justify-between text-sm cursor-pointer rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-600 focus:ring-inset"
                                >
                                    <option value="">Choisis une option</option>
                                    @foreach($utilities as $utility)
                                        <option
                                            value="{{$utility->getKey()}}"
                                            @selected($oldUtility['utility_id'] === $utility->getKey())
                                        >
                                            {{$utility->name}}
                                        </option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 py-4">
                                <textarea
                                    id="maitrise_description"
                                    name="utilities[{{ $key }}][description]"
                                    rows="4"
                                    class="block w-full text-sm text-black rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-800 focus:ring-inset"
                                    placeholder="Je suis convaincu..."
                                >{{ $oldUtility['description'] ?? '' }}</textarea>
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
                    @endforeach
                @endif
                </tbody>
                <tfoot>
                    <tr class="font-semibold text-gray-900">
                        <th id="add-line" scope="row" colspan="3" class="px-6 py-3 font-bold text-red-800">
                            <div class="w-full flex items-center space-x-2 {{ $errors->has('utilities.*') ? 'justify-between' : 'justify-end' }}">
                                <div>
                                    @if($errors->has('utilities.*.utility_id'))
                                        <x-form-alert error="utilities.*.utility_id" />
                                    @endif
                                    @if($errors->has('utilities.*.description'))
                                        <x-form-alert error="utilities.*.description" />
                                    @endif
                                </div>
                                <p
                                    class="w-fit cursor-pointer hover:underline"
                                    @click="elt = document.createElement('tr');
                                            uuid = self.crypto.randomUUID()
                                            elt.innerHTML = component.innerHTML;
                                            elt.querySelector('select').name = `utilities[${uuid}][utility_id]`
                                            elt.querySelector('select').selectedIndex = 0
                                            elt.querySelector('textarea').name = `utilities[${uuid}][description]`
                                            elt.querySelector('textarea').value = ''
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
