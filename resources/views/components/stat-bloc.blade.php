@props(['color', 'name', 'modifier', 'value'])

<div>
    <div class="rounded-lg border-2 flex flex-col items-center p-2 pb-5 relative" style="border-color: {{ $color }}">
        <p class="font-titleMiddleAge text-2xl" style="color: {{ $color }}">{{$name}}</p>
        <p class="font-titleMiddleAge text-xl">
            {{ $value >= 10 ? "+$modifier" : $modifier }}
        </p>
        <div class="absolute bottom-0 translate-y-1/2 border-2 rounded-full w-2/5 bg-[#fafaf8] text-center" style="border-color: {{ $color }}">
            <p class="">
                {{ $value }}
            </p>
        </div>
    </div>

    {{$slot}}
</div>
