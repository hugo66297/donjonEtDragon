@props(['data', 'name', 'label', 'dropdown'])

<div
    class="relative"
    x-data="{
        selectedItem: [],
        query: '',
        originalData: @js($data),
        data: @js($data),
        name: @js($name),
        label: @js($label),

        search() {
            this.data = this.originalData.filter((dt) => {
                return dt.name.toLowerCase().includes(this.query)
            })
        },
        pushItem(item) {
            if (this.selectedItem.includes(item)) {
                this.selectedItem = this.selectedItem.filter(e => e !== item)
            } else {
                this.selectedItem.push(item)
            }
        }
    }"
>
    <label for="armes" class="font-titleMiddleAge text-red-800">
        {{ $label }}
    </label>
    <div x-data="{open: false}">
        <div
            data-dropdown-toggle="{{$dropdown}}"
            data-dropdown-placement="bottom"
            x-on:click="open = !open"
            x-text="selectedItem.length === 0 ? `Choisis des ${label.toLowerCase()}` : `${selectedItem.length} option(s) sélectionnée(s)`"
            class="p-2.5 w-full text-sm bg-transparent border-b border-gray-600 focus:ring-0 focus:border-red-800"
        ></div>
        <div class="hidden z-10 bg-[#f8f8f8] w-full rounded-lg shadow" id="{{$dropdown}}">
            <div class="p-3">
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
                        placeholder="Recherche une aptitude"
                        x-model="query"
                        x-on:input.debounce="search()"
                    >
                </div>
            </div>
            <ul class="h-48 px-3 pb-3 overflow-y-auto text-sm text-gray-700">
                <template x-for="dt in data">
                    <li>
                        <div class="flex items-center pl-2 py-2 rounded">
                            <template x-if="selectedItem.includes(dt.name)">
                                <input
                                    type="checkbox"
                                    name="{{$name}}[]"
                                    checked
                                    x-bind:id="dt.id"
                                    x-bind:value="dt.id"
                                    x-on:click="pushItem(dt.name)"
                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2"
                                >
                            </template>
                            <template x-if="!selectedItem.includes(dt.name)">
                                <input
                                    type="checkbox"
                                    name="{{$name}}[]"
                                    x-bind:id="dt.id"
                                    x-bind:value="dt.id"
                                    x-on:click="pushItem(dt.name)"
                                    class="w-4 h-4 text-red-600 bg-gray-100 border-gray-300 rounded focus:ring-red-500 focus:ring-2"
                                >
                            </template>
                            <label
                                x-text="dt.name"
                                x-bind:for="dt.id"
                                class="ml-2 text-sm font-medium text-gray-900 hover:cursor-pointer"
                            ></label>
                        </div>
                        <template x-if="dt.full_description">
                            <p class="text-gray-500 ml-8" x-text="dt.full_description">
                            </p>
                        </template>
                    </li>
                </template>
            </ul>
        </div>
    </div>
</div>
