<div id="step-div-4" class="hidden p-4 space-y-8">
    <div id="div-coins" class="">
        <div class="grid grid-cols-5 gap-4">
            @foreach($coins as $key => $coin)
                <div>
                    <input type="hidden" name="coins[{{$key}}][coin_id]" value="{{$coin->getKey()}}"/>
                    <x-input
                        type="number"
                        name="coins[{{$key}}][quantity]"
                        label="{{ $coin->name }}"
                        placeholder="Quantité"
                    />
                    <x-form-alert error="coins.{{$key}}.quantity" />
                </div>
            @endforeach
        </div>
    </div>
    <div id="div-equipment" class="">
        <x-rich-text-editor
            :key="'equipment'"
            id="equipment"
            name="hero[equipment]"
            placeholder="Une cotte de mailles*, une hache à deux mains, 3 javelines, un sac-à-dos, ..."
            label="Équipement"
            required
        />
    </div>
</div>
