<div id="step-div-1" class="hidden p-4 space-y-8">
    <livewire:datatable.simple-datatable
        :collections="[$abilities, $savingThrows->load('ability'), $skills->load('ability')]"
        :headings="[['Capacité', 'Valeur', 'Bonus'], ['Jets de sauvegarde', 'Bonus', 'Maitrisé ?'], ['Compétences', 'Bonus', 'Maitrisé ?']]"
        :names="['abilities', 'savingThrows', 'skills']"
        :fields="[['charactable_id', 'ability_value', 'other_modifier_ability'], ['charactable_id', 'other_modifier_throw', 'is_proficient'], ['charactable_id', 'other_modifier_skill', 'is_proficient']]"
    />
</div>
