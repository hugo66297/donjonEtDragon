<section
    class="bg-gray-50"
    x-data="{
        limitFields: @entangle('limitFields'),
        addField() {
            this.limitFields += 1
        },
        removeField() {
            this.limitFields -= 1
        }
    }"
>
    <div class="">
        <!-- Start coding here -->
        <div class="flex flex-col md:flex-row items-center justify-start py-4">
            <div class="w-full md:w-auto flex flex-col md:flex-row space-y-2 md:space-y-0 items-stretch md:items-center justify-end md:space-x-3 flex-shrink-0">
                <button
                    type="button"
                    class="flex items-center justify-center text-white bg-red-800 hover:bg-red-700 font-medium rounded-lg text-sm px-4 py-2 focus:outline-none"
                    x-on:click="addField()"
                >
                    <svg class="h-4 w-4 mr-2" fill="currentColor" viewbox="0 0 20 20" aria-hidden="true">
                        <path clip-rule="evenodd" fill-rule="evenodd" d="M10 3a1 1 0 011 1v5h5a1 1 0 110 2h-5v5a1 1 0 11-2 0v-5H4a1 1 0 110-2h5V4a1 1 0 011-1z" />
                    </svg>
                    Ajouter une ligne
                </button>
            </div>
        </div>
        <div class="bg-white shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500">
                    @foreach($collections as $key => $collection)
                        <thead class="text-white uppercase bg-gray-700">
                        <tr>
                            @foreach($headings as $heading)
                                <th class="px-4 py-3">{{ $heading }}</th>
                            @endforeach
                            <th scope="col" class="px-4 py-3">
                                <span class="sr-only">Actions</span>
                            </th>
                        </tr>
                        </thead>
                        <tbody class="">
                            @for($i = 1; $i <= $limitFields; $i++)
                                <tr class="border-b">
                                    <td class="p-3 w-56 md:w-96">
                                        <x-select
                                            :data="$collection"
                                            name="{{ $names[$key] }}[{{ $i }}][{{ $fields[1] }}]"
                                            placeholder="Choisis une attaque"
                                            dropdown="dropdownAttacks{{ $i }}"
                                            :key="$key"
                                        />
                                    </td>
                                    <td class="p-3">
                                        <x-input
                                            type="textarea"
                                            name="{{ $names[$key] }}[{{ $i }}][{{ $fields[2] }}]"
                                        />
                                    </td>
                                    <td class="p-3 text-center">
                                        <button
                                            class="inline-flex items-center p-0.5 text-sm font-medium text-center text-red-800 hover:text-gray-800"
                                            type="button"
                                            @click.prevent="$el.parentNode.parentNode.remove(); removeField()"
                                        >
                                            <svg fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-5 h-5">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M14.74 9l-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 01-2.244 2.077H8.084a2.25 2.25 0 01-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 00-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 013.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 00-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 00-7.5 0" />
                                            </svg>
                                        </button>
                                    </td>
                                </tr>
                            @endfor
                        </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
