<div id="step-div-3" class="hidden p-4 space-y-8">
    <div class="flex items-center space-x-4">
        <div class="relative">
            <input
                type="number"
                id="bonus_maitrise"
                name="hero[proficiency_bonus]"
                class="block w-full px-2.5 pb-2.5 pt-4 text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer"
                placeholder=" "
                value="{{ old('hero.proficiency_bonus') ?? 2 }}"
            />
            <label
                for="bonus_maitrise"
                class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
            >
                Bonus de maitrise
            </label>
        </div>
    </div>
    <div id="div-feature" class="">
        <div class="relative" x-data="dropdownFeatures">
            <label for="armes" class="font-titleMiddleAge text-red-800">
                Aptitudes
            </label>
            <div>
                <div
                    x-on:click="this.open = !this.open"
                    x-on:click.away="this.open = false"
                    data-dropdown-toggle="dropdownFeaturesSearch"
                    data-dropdown-placement="bottom"
                    class="p-2.5 w-full text-sm bg-transparent rounded-lg border border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800"
                >
                    <template x-if="selectedItem.length === 0">
                        <p>Choisis des aptitudes</p>
                    </template>
                    <template x-if="selectedItem.length > 0" x-for="item in selectedItem">
                        <span class="ml-1 p-1 bg-gray-300" x-text="item"></span>
                    </template>
                </div>
                <div x-if="open" id="dropdownFeaturesSearch" class="z-10 hidden bg-[#f8f8f8] w-full rounded-lg shadow">
                    <div class="p-3">
                        <label for="input-group-search" class="sr-only">Recherche</label>
                        <div class="relative">
                            <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                                <svg class="w-5 h-5 text-gray-500" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                                </svg>
                            </div>
                            <input
                                x-model="query"
                                x-on:input.debounce="search()"
                                type="text"
                                id="input-group-search"
                                class="block w-full p-2.5 pl-10 text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800"
                                placeholder="Recherche une aptitude"
                            >
                        </div>
                    </div>
                    <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700" aria-labelledby="dropdownSearchButton">
                        <template x-for="feature in features">
                            <li>
                                <div class="flex items-center pl-2 py-2 rounded">
                                    <input
                                        type="checkbox"
                                        name="features[]"
                                        x-bind:id="feature.id"
                                        x-bind:value="feature.id"
                                        x-on:click="pushItem(feature.name)"
                                        class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2"
                                    >
                                    <label
                                        x-text="feature.name"
                                        x-bind:for="feature.id"
                                        class="ml-2 text-sm font-medium text-gray-900 hover:cursor-pointer"></label>
                                </div>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div id="div-maitrise" class="">
        <div class="relative overflow-x-auto table-auto shadow-md sm:rounded-lg">
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
                                class="block w-full px-2.5 pb-2.5 pt-4 text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800">
                            <option value="">Choisis une option</option>
                            @foreach($utilities as $utility)
                                <option value="{{$utility->getKey()}}">{{$utility->name}}</option>
                            @endforeach
                        </select>
                    </td>
                    <td class="px-6 py-4">
                                <textarea id="maitrise_description" name="maitriseDescriptions[]" rows="4"
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

<script>
    document.addEventListener('alpine:init', () => {
        Alpine.data('dropdownFeatures', () => ({
            selectedItem: [],
            open: false,
            query: '',
            originalFeatures: @js($features),
            features: @js($features),

            search() {
                return this.features.filter((feature) => {
                    return feature.name.toLowerCase().includes(this.query)
                })
            },
            pushItem(item) {
                if (this.selectedItem.includes(item)) {
                    this.selectedItem = this.selectedItem.filter(e => e !== item)
                } else {
                    this.selectedItem.push(item)
                }
            }
        }))
    })
</script>
