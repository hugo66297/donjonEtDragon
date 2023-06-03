<div id="step-div-2" class="hidden p-4 space-y-8">
    <div id="div-weapons">
        <div class="relative">
            <x-multiple-select
                :data="$weapons"
                label="Armes"
                name="weapons"
                placeholder="Choisis des armes"
                dropdown="dropdownWeapons"
            />
            <x-form-alert error="weapons" />
        </div>
    </div>
    <div id="div-attacks">
        <p class="font-titleMiddleAge text-red-800">
            Attaques
            <i class="fa-solid fa-circle-info" data-tooltip-target="tooltip-attacks"></i>
        </p>
        <div id="tooltip-attacks" role="tooltip" class="absolute z-10 invisible inline-block px-3 py-2 text-sm font-medium text-white transition-opacity duration-300 bg-gray-900 rounded-lg shadow-sm opacity-0 tooltip dark:bg-gray-700">
            Si le personnage n'a pas d'attaque, vous devez enlever la ligne
            <div class="tooltip-arrow" data-popper-arrow></div>
        </div>
        <div class="relative overflow-x-auto table-auto shadow-md sm:rounded-md">
            <table
                id="table-attacks"
                class="w-full text-sm text-left text-white"
                x-data="{ component: [] }"
                x-init="component = $refs.tbody.querySelector('tr')"
            >
                <thead class="text-xs uppercase bg-gray-700">
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
                    @if(!old('attacks'))
                        <tr x-data="" x-ref="line" class="border-b">
                            <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                @php $key = \Illuminate\Support\Str::uuid(); @endphp
                                <select
                                    onchange="disabledDescription(this)"
                                    id="attack_id"
                                    name="attacks[{{ $key }}][attack_id]"
                                    class="py-2 px-3 w-full bg-white flex justify-between text-sm cursor-pointer rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-600 focus:ring-inset"
                                >
                                    <option value="">Choisis une option</option>
                                    @foreach($attacks as $attack)
                                        <option value="{{$attack->getKey()}}">{{$attack->name}}</option>
                                    @endforeach
                                </select>
                            </td>
                            <td class="px-6 py-4">
                        <textarea
                            id="attack_description"
                            name="attacks[{{ $key }}][other_description]"
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
                        @foreach(old('attacks') as $oldAttack)
                            <tr x-data="" x-ref="line" class="border-b">
                                <td class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap">
                                    @php $key = \Illuminate\Support\Str::uuid(); @endphp
                                    <select
                                        onchange="disabledDescription(this)"
                                        id="attack_id"
                                        name="attacks[{{ $key }}][attack_id]"
                                        class="py-2 px-3 w-full bg-white flex justify-between text-sm cursor-pointer rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-600 focus:ring-inset"
                                    >
                                        <option value="">Choisis une option</option>
                                        @foreach($attacks as $attack)
                                            <option
                                                @selected($oldAttack['attack_id'] === $attack->getKey())
                                                value="{{$attack->getKey()}}"
                                            >{{$attack->name}}</option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="px-6 py-4">
                                    <textarea
                                        id="attack_description"
                                        name="attacks[{{ $key }}][other_description]"
                                        rows="4"
                                        class="block w-full text-sm text-black rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-800 focus:ring-inset"
                                        placeholder="Je suis convaincu..."
                                    >{{ $oldAttack['other_description'] ?? '' }}</textarea>
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
                        <div class="w-full flex items-center space-x-2 {{ $errors->has('attacks.*') ? 'justify-between' : 'justify-end' }}">
                            <div>
                                @if($errors->has('attacks.*.attack_id'))
                                    <x-form-alert error="attacks.*.attack_id" />
                                @endif
                                @if($errors->has('attacks.*.other_description'))
                                    <x-form-alert error="attacks.*.other_description" />
                                @endif
                            </div>
                            <p
                                class="w-fit cursor-pointer hover:underline self-end"
                                @click="elt = document.createElement('tr');
                                    uuid = self.crypto.randomUUID()
                                    elt.innerHTML = component.innerHTML;
                                    elt.querySelector('select').name = `attacks[${uuid}][attack_id]`
                                    elt.querySelector('select').selectedIndex = 0
                                    elt.querySelector('textarea').name = `attacks[${uuid}][other_description]`
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
