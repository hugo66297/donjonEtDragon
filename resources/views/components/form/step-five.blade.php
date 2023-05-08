<div id="step-div-4" class="hidden p-4 space-y-8">
    <div id="div-coins" class="">
        <div class="grid grid-cols-5 gap-4">
            @foreach($coins as $key => $coin)
                <div>
                    <input type="hidden" name="coins[{{$key}}][coin_id]" value="{{$coin->getKey()}}"/>
                    <label for="{{ $coin->name }}" class="font-titleMiddleAge text-red-800">
                        {{ $coin->name }}
                    </label>
                    <input
                        type="number"
                        id="{{ $coin->name }}"
                        name="coins[{{$key}}][quantity]"
                        class="block p-2 w-full text-sm text-gray-900 bg-transparent rounded-md border appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-red-800 peer"
                        placeholder="Quantité"
                        value="{{ old("coins.{$coin->getKey()}") ?? "" }}"
                    />
                    <x-form-alert error="coins.{{$key}}.quantity" />
                </div>
            @endforeach
        </div>
    </div>
    <div id="div-equipment" class="">
        <x-easy-mde
            name="hero[equipment]"
            placeholder="L'équipement du personnage"
        ></x-easy-mde>

    </div>
</div>
