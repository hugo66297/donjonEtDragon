<section class="bg-gray-50">
    <div class="">
        <div class="bg-white relative shadow-md sm:rounded-lg overflow-hidden">
            <div class="overflow-x-auto">
                <table class="w-full text-sm text-left text-gray-500" id="accordion-collapse" data-accordion="collapse">
                    @foreach($collections as $key => $collection)
                        <thead
                            class="bg-gray-100 cursor-pointer"
                            id="accordion-collapse-heading-{{$key}}"
                            data-accordion-target="#accordion-collapse-body-{{$key}}"
                            aria-expanded="true"
                            aria-controls="accordion-collapse-body-{{$key}}"
                        >
                            <tr class="text-xs text-gray-700 uppercase bg-gray-100">
                                @foreach($headings[$key] as $heading)
                                    <th class="px-4 py-3 text-red-800">{{ $heading }}</th>
                                @endforeach
                                <th scope="col" class="px-4 py-3">
                                    <span class="sr-only">Collapse</span>
                                    <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor" viewBox="0 0 20 20">
                                        <path fill-rule="evenodd" d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                                    </svg>
                                </th>
                            </tr>
                        </thead>
                        <tbody
                            id="accordion-collapse-body-{{$key}}"
                            aria-labelledby="accordion-collapse-heading-{{$key}}"
                            class="hidden"
                        >
                                @foreach($collection as $item)
                                    <tr class="border-b">
                                        <th class="px-4 py-3 font-bold text-gray-900 whitespace-nowrap">{{ $item->name }}</th>
                                        <x-input
                                            type="hidden"
                                            name="{{$names[$key]}}[{{$item->getKey()}}][{{$fields[$key][0]}}]"
                                            value="{{$item->getKey()}}"
                                        />
                                        <td class="px-4">
                                            <x-input
                                                type="number"
                                                name="{{$names[$key]}}[{{$item->getKey()}}][{{$fields[$key][1]}}]"
                                            />
                                        </td>
                                        @if($item instanceof \App\Models\Ability)
                                            <td class="px-4">
                                                <x-input
                                                    type="number"
                                                    name="{{$names[$key]}}[{{$item->getKey()}}][{{$fields[$key][2]}}]"
                                                />
                                            </td>
                                        @else
                                            <td class="px-4">
                                                <label class="relative inline-flex items-center cursor-pointer">
                                                    <input
                                                        class="sr-only peer"
                                                        type="checkbox"
                                                        value="1"
                                                        name="{{$names[$key]}}[{{$item->getKey()}}][{{$fields[$key][2]}}]"
                                                    >
                                                    <div class="w-11 h-6 peer-focus:outline-none rounded-full peer bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-800"></div>
                                                </label>
                                            </td>
                                        @endif
                                    </tr>
                                @endforeach
                            </tbody>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
</section>
