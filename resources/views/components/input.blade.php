@if($label)
    <x-input-label :for="$id" class="font-medium text-red-800 font-titleMiddleAge">
        {!! $label !!}
    </x-input-label>
@endif

@if($type === 'textarea')
    <textarea
        id="{{$id}}"
        class="block w-full text-sm rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-800 focus:ring-inset"
        name="{{$name}}"
        rows="4"
        placeholder="{{$placeholder}}"
    >{{$value}}</textarea>
@else
    <input
        id="{{$id}}"
        class="block w-full text-sm rounded-md shadow-sm border-0 ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-red-800 focus:ring-inset"
        type="{{$type}}"
        name="{{$name}}"
        placeholder="{{$placeholder}}"
        value="{{$value}}"
        step="{{ $type === 'number' && $decimal ? '0.1' : '1' }}"
    />
@endif
