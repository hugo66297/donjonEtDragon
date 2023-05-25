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
        </div>
    </div>
    <div id="div-attacks">
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
                                    >{{ $oldAttack['description'] ?? '' }}</textarea>
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
                    <th id="add-line" scope="row" colspan="5" class="px-6 py-3">
                        <div class="font-bold text-red-800 flex justify-end">
                            <p
                                class="w-fit cursor-pointer hover:underline"
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
