@props(['textColor', 'borderColor', 'name', 'modifier', 'value'])

<div>
    <div class="rounded-lg border-2 border-{{$borderColor}} flex flex-col items-center p-2 pb-5 relative">
        <p class="font-titleMiddleAge text-2xl text-{{$textColor}}">{{$name}}</p>
        <p class="font-titleMiddleAge text-xl">
            {{ $value >= 10 ? "+$modifier" : $modifier }}
        </p>
        <div class="absolute bottom-0 translate-y-1/2 border-2 border-{{$borderColor}} rounded-full w-2/5 bg-[#fafaf8] text-center">
            <p class="">
                {{ $value }}
            </p>
        </div>
    </div>

    {{$slot}}
</div>
