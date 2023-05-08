<div id="step-div-1" class="hidden p-4 space-y-8">
    <div class="grid grid-cols-6 gap-8">
        @foreach($abilities as $ability)
            <div class="space-y-4">
                <div class="space-y-2">
                    <input type="hidden" name="abilities[{{$ability->getKey()}}][charactable_id]" value="{{$ability->getKey()}}">
                    <div class="relative">
                        <input
                            type="number"
                            id="valeur-{{$ability->name}}"
                            name="abilities[{{$ability->getKey()}}][ability_value]"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-red-800 peer"
                            placeholder="Valeur"
                        />
                        <label
                            for="valeur-{{$ability->name}}"
                            class="absolute font-titleMiddleAge text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
                        >
                            {{ $ability->name }}
                        </label>
                    </div>
                    <div class="relative">
                        <input
                            type="number"
                            id="bonus-{{$ability->name}}"
                            name="abilities[{{$ability->getKey()}}][other_modifier_ability]"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-red-800 peer"
                            placeholder="Bonus"
                        />
                    </div>
                </div>
                <hr class="border border-gray-300">
                <div class="space-y-2">
                    <input type="hidden" name="savingThrows[{{$ability->savingThrow->getKey()}}][charactable_id]"
                           value="{{$ability->savingThrow->getKey()}}">
                    <h2 class="font-titleMiddleAge text-red-800 font-sm">Jet de suavegarde</h2>
                    <div class="relative">
                        <input
                            type="number"
                            id="modificateur-{{$ability->name}}"
                            name="savingThrows[{{$ability->savingThrow->getKey()}}][other_modifier_throw]"
                            class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-red-800 peer"
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
                            <input type="hidden" name="skills[{{$skill->getKey()}}][charactable_id]"
                                   value="{{$skill->getKey()}}">
                            <div class="relative">
                                <input
                                    type="number" id="modificateur-{{$skill->name}}"
                                    name="skills[{{$skill->getKey()}}][other_modifier_skill]"
                                    class="block px-2.5 pb-2.5 pt-4 w-full text-sm text-gray-900 bg-transparent rounded-lg border-1 appearance-none border-gray-600 focus:outline-none focus:ring-0 focus:border-red-800 peer"
                                    placeholder="Bonus"
                                />
                                <label
                                    for="modificateur-{{$skill->name}}"
                                    class="absolute font-titleMiddleAge text-gray-500 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1"
                                >
                                    {{ $skill->name }}
                                </label>
                            </div>
                            <label class="relative inline-flex items-center cursor-pointer">
                                <input
                                    type="checkbox" id="maitrise-{{$skill->name}}"
                                    name="skills[{{$skill->getKey()}}][is_proficient]"
                                    value="1"
                                    class="sr-only peer"
                                >
                                <div
                                    class="w-11 h-6 peer-focus:outline-none rounded-full peer bg-gray-700 peer-checked:after:translate-x-full peer-checked:after:border-white after:content-[''] after:absolute after:top-[2px] after:left-[2px] after:bg-white after:border-gray-300 after:border after:rounded-full after:h-5 after:w-5 after:transition-all peer-checked:bg-red-800"></div>
                                <span class="ml-3 text-sm font-medium text-gray-900">Maîtrisé ?</span>
                            </label>
                        </div>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</div>
