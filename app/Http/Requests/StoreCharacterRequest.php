<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;
use Illuminate\Validation\Rule;

class StoreCharacterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
//        dd($this->request->all());
        return [
            // Hero
            'hero' => ['required', 'array'],
            'hero.category_id' => ['required', 'uuid', 'exists:categories,id'],
            'hero.subrace_id' => ['required', 'uuid', 'exists:subraces,id'],
            'hero.background_id' => ['required', 'uuid', 'exists:backgrounds,id'],
            'hero.alignment_id' => ['required', 'uuid', 'exists:alignments,id'],
            'hero.goal_id' => ['required', 'uuid', 'exists:goals,id'],
            'hero.character_past' => ['nullable'],
            'hero.passive_wisdom' => ['required', 'integer'],
            'hero.proficiency_bonus' => ['required', 'integer'],
            'hero.armor_class' => ['required', 'integer'],
            'hero.initiative' => ['required', 'integer'],
            'hero.speed' => ['required', 'numeric'],
            'hero.maximum_hp' => ['required', 'integer'],
            'hero.hit_dice' => ['required', 'regex:/^[1-9]d\d+/mi'],
            'hero.equipment' => ['required', 'string', 'max:500'],
            'hero.personality_traits' => ['required', 'string', 'max:500'],
            'hero.ideals' => ['required', 'string', 'max:500'],
            'hero.bonds' => ['required', 'string', 'max:500'],
            'hero.flaws' => ['required', 'string', 'max:500'],
            // Abilities
            'abilities' => ['required', 'array', 'size:6'],
            'abilities.*' => ['array'],
            'abilities.*.charactable_id' => ['required', 'uuid', 'exists:abilities,id', 'distinct'],
            'abilities.*.ability_value' => ['required', 'integer'],
            'abilities.*.other_modifier_ability' => ['nullable', 'integer'],
            // Skills
            'skills' => ['required', 'array', 'size:18'],
            'skills.*' => ['array'],
            'skills.*.charactable_id' => ['required', 'uuid', 'exists:skills,id', 'distinct'],
            'skills.*.is_proficient' => ['nullable', 'boolean'],
            'skills.*.other_modifier_skill' => ['nullable', 'integer'],
            // SavingThrows
            'savingThrows' => ['required', 'array', 'size:6'],
            'savingThrows.*' => ['array'],
            'savingThrows.*.charactable_id' => ['required', 'uuid', 'exists:saving_throws,id', 'distinct'],
            'savingThrows.*.is_proficient' => ['nullable', 'boolean'],
            'savingThrows.*.other_modifier_throw' => ['nullable', 'integer'],
            // Weapons
            'weapons' => ['array'],
            'weapons.*' => ['uuid', 'exists:weapons,id', 'distinct'],
            // Features
            'features' => ['array'],
            'features.*' => ['uuid', 'exists:features,id', 'distinct'],
            // Attacks
            'attacks' => ['array'],
            'attacks.*' => ['array'],
            'attacks.*.attack_id' => ['nullable', 'uuid', 'exists:attacks,id', 'distinct', 'filled'],
            'attacks.*.other_description' => ['nullable', 'max:500'],
            // Utilities
            'utilities' => ['array'],
            'utilities.*' => ['array'],
            'utilities.*.utility_id' => ['nullable', 'uuid', 'exists:utilities,id', 'distinct', 'filled'],
            'utilities.*.description' => ['nullable', 'max:500'],
             // Coins
            'coins' => ['required', 'array', 'size:5'],
            'coins.*' => ['array'],
            'coins.*.coin_id' => ['required', 'uuid', 'exists:coins,id', 'distinct'],
            'coins.*.quantity' => ['nullable', 'integer'],
             // Adventures
            'adventures' => ['required', 'array'],
            'adventures.*' => ['uuid', 'exists:adventures,id']
        ];
    }
}
