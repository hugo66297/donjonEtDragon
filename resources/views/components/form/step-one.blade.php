<div id="step-div-0" class="p-4 space-y-8">
    <div class="grid grid-cols-2 gap-8">
        <div class="relative">
            <x-select
                :data="$categories"
                label="Classe"
                :name="['hero[category_id]', 'hero.category_id']"
                placeholder="Choisis une catégorie"
                dropdown="dropdownCategories"
            />
            <x-form-alert :error="'hero.category_id'" />
        </div>
        <div class="relative">
            <x-select
                :data="$backgrounds"
                label="Historique"
                :name="['hero[background_id]', 'hero.background_id']"
                placeholder="Choisis un historique"
                dropdown="dropdownBackgrounds"
            />
            <x-form-alert :error="'hero.background_id'" />
        </div>
        <div class="relative">
            <x-select
                :data="$subRaces"
                label="Race"
                :name="['hero[subrace_id]', 'hero.subrace_id']"
                placeholder="Choisis une race"
                dropdown="dropdownRaces"
            />
            <x-form-alert :error="'hero.subrace_id'" />
        </div>
        <div class="relative">
            <x-select
                :data="$alignments"
                label="Alignement"
                :name="['hero[alignment_id]', 'hero.alignment_id']"
                placeholder="Choisis un alignement"
                dropdown="dropdownAlignments"
            />
            <x-form-alert :error="'hero.alignment_id'" />
        </div>
        <div class="relative">
            <x-select
                :data="$goals"
                label="Objectif"
                :name="['hero[goal_id]', 'hero.goal_id']"
                placeholder="Choisis un objectif"
                dropdown="dropdownGoals"
            />
            <x-form-alert :error="'hero.goal_id'" />
        </div>
        <div class="relative">
            <x-multiple-select
                :data="$adventures"
                label="Aventures"
                name="adventures"
                placeholder="Choisis des aventures"
                dropdown="dropdownAdventures"
            />
            <x-form-alert :error="'adventures'" />
        </div>
        <div class="relative col-span-2">
            <label for="past" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Passé du personnage
            </label>
            <textarea id="past" name="hero[character_past]" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800"
                      placeholder="Je suis convaincu...">{{ old('hero.character_past') ?? "" }}</textarea>
            <x-form-alert :error="'hero.character_past'" />
        </div>
    </div>
    <hr class="border border-gray-300">
    <div class="grid grid-cols-3 gap-8">
        <div class="relative">
            <input type="number" id="armure" name="hero[armor_class]"
                   class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer"
                   placeholder=" " value="{{ old('hero.armor_class') ?? "" }}"/>
            <label for="armure"
                   class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Classe d'armure
            </label>
            <x-form-alert :error="'hero.armor_class'" />
        </div>
        <div class="relative">
            <input type="number" id="initiative" name="hero[initiative]"
                   class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer"
                   placeholder=" " value="{{ old('hero.initiative') ?? "" }}"/>
            <label for="initiative"
                   class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Initiative
            </label>
            <x-form-alert :error="'hero.initiative'" />
        </div>
        <div class="relative">
            <input type="number" id="vitesse" name="hero[speed]" step="0.1"
                   class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer"
                   placeholder=" " value="{{ old('hero.speed') ?? "" }}"/>
            <label for="vitesse"
                   class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Vitesse
            </label>
            <x-form-alert :error="'hero.speed'" />
        </div>
        <div class="relative">
            <input type="number" id="pdv" name="hero[maximum_hp]"
                   class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer"
                   placeholder=" " value="{{ old('hero.maximum_hp') ?? "" }}"/>
            <label for="pdv"
                   class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Point de vie
            </label>
            <x-form-alert :error="'hero.maximum_hp'" />
        </div>
        <div class="relative">
            <input type="text" id="des" name="hero[hit_dice]"
                   class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer"
                   placeholder=" " value="{{ old('hero.hit_dice') ?? "" }}"/>
            <label for="des"
                   class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Dés de vie
            </label>
            <x-form-alert :error="'hero.hit_dice'" />
        </div>
        <div class="relative">
            <input type="number" id="sagesse_passive" name="hero[passive_wisdom]"
                   class="block px-2.5 pb-2.5 pt-4 w-full text-sm bg-transparent rounded-lg border-1 border-gray-600 appearance-none focus:outline-none focus:ring-0 focus:border-red-800 peer"
                   placeholder=" " value="{{ old('hero.passive_wisdom') ?? "" }}"/>
            <label for="sagesse_passive"
                   class="absolute font-titleMiddleAge text-sm text-gray-400 duration-300 transform -translate-y-4 scale-75 top-2 z-10 origin-[0] bg-[#fafaf8] px-2 peer-focus:px-2 peer-focus:text-red-800 peer-placeholder-shown:scale-100 peer-placeholder-shown:-translate-y-1/2 peer-placeholder-shown:top-1/2 peer-focus:top-2 peer-focus:scale-75 peer-focus:-translate-y-4 left-1">
                Sagesse passive
            </label>
            <x-form-alert :error="'hero.passive_wisdom'" />
        </div>
    </div>
    <hr class="border border-gray-300">
    <div class="grid grid-cols-2 gap-8">
        <div>
            <label for="traits" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Traits de personnalité
            </label>
            <textarea id="traits" name="hero[traits]" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800"
                      placeholder="Quand je prends une...">{{ old('hero.traits') ?? "" }}</textarea>
            <x-form-alert :error="'hero.traits'" />
        </div>
        <div>
            <label for="ideaux" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Idéaux
            </label>
            <textarea id="ideaux" name="hero[ideals]" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800"
                      placeholder="Sincérité. Il est...">{{ old('hero.ideals') ?? "" }}</textarea>
            <x-form-alert :error="'hero.ideals'" />
        </div>
        <div>
            <label for="liens" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Liens
            </label>
            <textarea id="liens" name="hero[liens]" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800"
                      placeholder="Un jour, Arbrefoudre...">{{ old('hero.liens') ?? "" }}</textarea>
            <x-form-alert :error="'hero.liens'" />
        </div>
        <div>
            <label for="defauts" class="block mb-2 text-lg font-medium text-red-800 font-titleMiddleAge">
                Défauts
            </label>
            <textarea id="defauts" name="hero[defects]" rows="4"
                      class="block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-600 placeholder-gray-400 focus:ring-red-800 focus:border-red-800"
                      placeholder="Je suis convaincu...">{{ old('hero.defects') ?? "" }}</textarea>
            <x-form-alert :error="'hero.defects'" />
        </div>
    </div>
</div>
