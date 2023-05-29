@props(['textColor', 'borderColor', 'name', 'modifier', 'value'])

{{--<div>--}}
{{--    <div--}}
{{--        class="rounded-lg border-2 flex flex-col items-center p-2 pb-5 relative"--}}
{{--        style="border-color: {{ $borderColor }}"--}}
{{--    >--}}
{{--        <p--}}
{{--            class="font-titleMiddleAge text-2xl"--}}
{{--            style="color: {{ $textColor }}"--}}
{{--        >--}}
{{--            {{ $name }}</p>--}}
{{--        <p class="font-titleMiddleAge text-xl">--}}
{{--            {{ $value >= 10 ? "+$modifier" : $modifier }}--}}
{{--        </p>--}}
{{--        <div--}}
{{--            class="absolute bottom-0 translate-y-1/2 border-2 rounded-full w-2/5 bg-[#fafaf8] text-center"--}}
{{--            style="border-color: {{ $borderColor }}"--}}
{{--        >--}}
{{--            <p class="">--}}
{{--                {{ $value }}--}}
{{--            </p>--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    {{$slot}}--}}
{{--</div>--}}

<div class="flex flex-col bg-white border shadow-sm rounded-xl">
    <div class="bg-gray-100 border-b rounded-t-xl">
        <p
            class="text-white p-3 rounded-t-xl text-lg font-bold"
            style="background-color: {{ $borderColor }}"
        >
            {{ $name }}
        </p>
    </div>
    <div class="p-4 md:p-5">
        <h3 class="text-lg font-bold text-gray-800">
            Card title
        </h3>
        <p class="mt-2 text-gray-800">
            With supporting text below as a natural lead-in to additional content.
        </p>
    </div>
</div>
