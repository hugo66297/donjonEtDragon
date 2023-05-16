@props(['data', 'name', 'label', 'dropdown', 'placeholder'])

<div
    class="relative"
    x-data="{
        selectedItem: {id: ''},
        oldSelectedItem: null,
        query: '',
        originalData: @js($data),
        data: @js($data),

        search() {
            this.data = this.originalData.filter((dt) => {
                return dt.name.toLowerCase().includes(this.query)
            })
        },
        removeItemSelected() {
            this.selectedItem.id = ''
        }
    }"
    x-init="
        $data.selectedItem.id = @js(old($name[1])) ? @js(old($name[1])) : ''
    "
>
    <p class="font-titleMiddleAge text-red-800">
        {{ $label }}
    </p>
    <div>
        <div
            data-dropdown-toggle="{{$dropdown}}"
            data-dropdown-placement="bottom"
            class="py-2 px-3 w-full bg-white flex justify-between text-sm cursor-pointer rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-600 focus:ring-inset"
        >
            <p x-text="selectedItem.id === '' ? @js($placeholder) : originalData.find(e => e.id === selectedItem.id).name"></p>
            <x-icon.double-arrow />
        </div>
        <div class="hidden z-10 bg-white w-full rounded-lg shadow-md" id="{{$dropdown}}">
            <div class="flex items-center justify-end p-2">
                <div
                    class="flex items-center text-sm text-red-700 hover:text-red-900 font-bold cursor-pointer"
                    x-on:click="removeItemSelected()"
                >
                    <p>Supprimer la sélection</p>
                    <x-icon.close-button />
                </div>
            </div>
            <div class="p-2">
                <label for="input-group-search" class="sr-only">Search</label>
                <div class="relative">
                    <div class="absolute inset-y-0 left-0 flex items-center pl-3 pointer-events-none">
                        <svg class="w-5 h-5 text-gray-500 dark:text-gray-400" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20">
                            <path fill-rule="evenodd" d="M8 4a4 4 0 100 8 4 4 0 000-8zM2 8a6 6 0 1110.89 3.476l4.817 4.817a1 1 0 01-1.414 1.414l-4.816-4.816A6 6 0 012 8z" clip-rule="evenodd"></path>
                        </svg>
                    </div>
                    <input
                        type="text"
                        id="input-group-search"
                        class="block w-full p-2 pl-10 text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800"
                        placeholder="Recherche ici"
                        x-model="query"
                        x-on:input.debounce="search()"
                    >
                </div>
            </div>
            <ul class="h-48 p-2 overflow-y-auto text-sm text-gray-700">
                <template x-for="dt in data" :key="dt.id">
                    <li>
                        <div class="flex items-center pl-2 py-2 rounded hover:bg-gray-200">
                            <input
                                type="radio"
                                class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 focus:ring-red-500 focus:ring-2"
                                name="{{$name[0]}}"
                                x-model="selectedItem.id"
                                :id="dt.id"
                                :value="dt.id"
                                :checked="selectedItem.id === dt.id"
                            >
                            <label
                                class="ml-2 text-sm font-medium text-gray-900 hover:cursor-pointer grow"
                                x-text="dt.name"
                                x-bind:for="dt.id"
                            ></label>
                        </div>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>
