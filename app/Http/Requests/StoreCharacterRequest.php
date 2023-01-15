<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class StoreCharacterRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            'category_id' => ['required'],
            'race_id' => ['required'],
            'background_id' => ['required'],
            'alignment_id' => ['required'],
            'goal_id' => ['required'],
            'character_past' => ['required'],
            'passive_wisdom' => ['required'],
            'proficiency_bonus' => ['required'],
            'armor_class' => ['required'],
            'initiative' => ['required'],
            'speed' => ['required'],
            'maximum_hp' => ['required'],
            'hit_dic' => ['required'],
            'equipment' => ['required'],
        ];
    }
}
