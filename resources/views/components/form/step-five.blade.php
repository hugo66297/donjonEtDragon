<div id="step-div-4" class="hidden p-4 space-y-8">
    <div id="div-coins" class="">
        <div class="grid grid-cols-5 gap-4">
            @foreach(\App\Models\Coin::all() as $coin)
                <div>
                    <label for="{{ $coin->name }}"
                           class="font-titleMiddleAge text-red-800">{{ $coin->name }}</label>
                    <input
                        type="number"
                        id="{{ $coin->name }}"
                        name="coins[{{$coin->getKey()}}]"
                        class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-red-800 peer"
                        placeholder="Quantité"
                        value="{{ old("coins.{$coin->getKey()}") ?? "" }}"
                    />
                </div>
                <x-form-alert :error="'coins[{{$coin->getKey()}}]'" />
            @endforeach
        </div>
    </div>
    <div id="div-equipment" class="">
        <x-markdown-editor :id="'description-markdown-editor'" :title="'Équipement'"
                           :name="'hero[equipment]'"></x-markdown-editor>
    </div>
</div>
