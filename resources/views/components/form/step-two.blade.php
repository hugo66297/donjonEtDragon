<div id="step-div-1" class="hidden p-4 space-y-8">
    <div class="grid grid-cols-6 gap-8">
        @foreach($abilities as $ability)
            <div class="space-y-4">
                <div class="space-y-2">
                    <input type="hidden" name="abilities[{{$ability->getKey()}}][charactable_id]" value="{{$ability->getKey()}}">
                    <div class="relative">
                        <x-input
                            type="number"
                            id="valeur-{{$ability->name}}"
                            name="abilities[{{$ability->getKey()}}][ability_value]"
                            label="{{ $ability->name }}"
                            peer
                        />
                    </div>
                    <div class="relative">
                        <x-input
                            type="number"
                            id="bonus-{{$ability->name}}"
                            name="abilities[{{$ability->getKey()}}][other_modifier_ability]"
                            placeholder="Bonus"
                            peer
                        />
                    </div>
                </div>
                <hr class="border border-gray-300">
                <div class="space-y-2">
                    <input type="hidden" name="savingThrows[{{$ability->savingThrow->getKey()}}][charactable_id]" value="{{$ability->savingThrow->getKey()}}">
                    <h2 class="font-titleMiddleAge text-red-800 font-sm">Jet de suavegarde</h2>
                    <div class="relative">
                        <x-input
                            type="number"
                            id="modificateur-{{$ability->name}}"
                            name="savingThrows[{{$ability->savingThrow->getKey()}}][other_modifier_throw]"
                            placeholder="Bonus"
                        />
                    </div>
                    <label class="relative inline-flex items-center cursor-pointer">
                        <input
                            type="checkbox"
                            id="maitrise-{{$ability->name}}"
                            name="savingThrows[{{$ability->savingThrow->getKey()}}][is_proficient]"
                            value="1"
                            class="sr-only peer"
                        >
                        <div
                            class="w-11 h-6 peer-focus:outline-none rounded-full peer bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-800"></div>
                        <span class="ml-3 text-sm font-medium text-gray-900">Maîtrisé ?</span>
                    </label>
                </div>
                <hr class="border border-gray-300">
                <div class="space-y-4">
                    <h2 class="font-titleMiddleAge text-red-800 font-sm">Compétences</h2>
                    @foreach($ability->skills as $skill)
                        <div class="space-y-2">
                            <input type="hidden" name="skills[{{$skill->getKey()}}][charactable_id]" value="{{$skill->getKey()}}">
                            <div class="relative">
                                <x-input
                                    type="number" id="modificateur-{{$skill->name}}"
                                    name="skills[{{$skill->getKey()}}][other_modifier_skill]"
                                    label="{{ $skill->name }}"
                                    peer
                                />
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input
                                    type="checkbox" id="maitrise-{{$skill->name}}"
                                    name="skills[{{$skill->getKey()}}][is_proficient]"
                                    value="1"
                                    class="sr-only peer"
                                >
                                <div
                                    class="w-11 h-6 peer-focus:outline-none rounded-full peer bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-800"
                                ></div>
                                <span class="ml-3 text-sm font-medium text-gray-900">Maîtrisé ?</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
