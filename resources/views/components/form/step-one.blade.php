<div id="step-div-0" class="p-4 space-y-8">
    <div class="grid grid-cols-2 gap-8">
        <div class="relative">
            <x-select
                :data="$categories"
                label="Classe"
                name="hero[category_id]"
                placeholder="Choisis une catégorie"
                dropdown="dropdownCategories"
            />
            <x-form-alert error="hero.category_id" />
        </div>
        <div class="relative">
            <x-select
                :data="$backgrounds"
                label="Historique"
                name="hero[background_id]"
                placeholder="Choisis un historique"
                dropdown="dropdownBackgrounds"
            />
            <x-form-alert error="hero.background_id" />
        </div>
        <div class="relative">
            <x-select
                :data="$subRaces"
                label="Race"
                name="hero[subrace_id]"
                placeholder="Choisis une race"
                dropdown="dropdownRaces"
            />
            <x-form-alert error="hero.subrace_id" />
        </div>
        <div class="relative">
            <x-select
                :data="$alignments"
                label="Alignement"
                name="hero[alignment_id]"
                placeholder="Choisis un alignement"
                dropdown="dropdownAlignments"
            />
            <x-form-alert error="hero.alignment_id" />
        </div>
        <div class="relative">
            <x-select
                :data="$goals"
                label="Objectif"
                name="hero[goal_id]"
                placeholder="Choisis un objectif"
                dropdown="dropdownGoals"
            />
            <x-form-alert error="hero.goal_id" />
        </div>
        <div class="relative">
            <x-multiple-select
                :data="$adventures"
                label="Aventures"
                name="adventures"
                placeholder="Choisis des aventures"
                dropdown="dropdownAdventures"
            />
            <x-form-alert error="adventures" />
        </div>
        <div class="relative col-span-2">
            <x-input
                id="past"
                name="hero[character_past]"
                placeholder="Je suis convaincu..."
                type="textarea"
                label="Passé du personnage"
            />
            <x-form-alert error="hero.character_past" />
        </div>
    </div>
    <hr class="border border-gray-300">
    <div class="grid grid-cols-3 gap-8">
        <div class="relative">
            <x-input
                id="armure"
                name="hero[armor_class]"
                type="number"
                label="Classe d'armure"
            />
            <x-form-alert error="hero.armor_class" />
        </div>
        <div class="relative">
            <x-input
                id="initiative"
                name="hero[initiative]"
                type="number"
                label="Initiative"
            />
            <x-form-alert error="hero.initiative" />
        </div>
        <div class="relative">
            <x-input
                id="speed"
                name="hero[speed]"
                type="number"
                label="Vitesse"
                step="0.1"
            />
            <x-form-alert error="hero.speed" />
        </div>
        <div class="relative">
            <x-input
                id="pdv"
                name="hero[maximum_hp]"
                type="number"
                label="Point de vie"
            />
            <x-form-alert error="hero.maximum_hp" />
        </div>
        <div class="relative">
            <x-input
                id="des"
                name="hero[hit_dice]"
                label="Dés de vie"
            />
            <x-form-alert error="hero.hit_dice" />
        </div>
        <div class="relative">
            <x-input
                id="sagesse_passive"
                name="hero[passive_wisdom]"
                type="number"
                label="Sagesse passive"
            />
            <x-form-alert error="hero.passive_wisdom" />
        </div>
    </div>
    <hr class="border border-gray-300">
    <div class="grid grid-cols-2 gap-8">
        <div>
            <x-input
                id="personality_traits"
                name="hero[personality_traits]"
                placeholder="Je suis convaincu..."
                type="textarea"
                label="Traits de personnalité"
            />
            <x-form-alert error="hero.personality_traits" />
        </div>
        <div>
            <x-input
                id="ideals"
                name="hero[ideals]"
                placeholder="Je suis convaincu..."
                type="textarea"
                label="Idéaux"
            />
            <x-form-alert error="hero.ideals" />
        </div>
        <div>
            <x-input
                id="bonds"
                name="hero[bonds]"
                placeholder="Je suis convaincu..."
                type="textarea"
                label="Liens"
            />
            <x-form-alert error="hero.bonds" />
        </div>
        <div>
            <x-input
                id="flaws"
                name="hero[flaws]"
                placeholder="Je suis convaincu..."
                type="textarea"
                label="Défauts"
            />
            <x-form-alert error="hero.flaws" />
        </div>
    </div>
</div>
