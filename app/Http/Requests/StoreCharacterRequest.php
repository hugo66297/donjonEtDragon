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
        return [
            // First page
            'category_id' => ['required'],
            'subrace_id' => ['required'],
            'background_id' => ['required'],
            'alignment_id' => ['required'],
            'goal_id' => ['required'],
            'passive_wisdom' => ['required'],
            'proficiency_bonus' => ['required'],
            'armor_class' => ['required'],
            'initiative' => ['required'],
            'speed' => ['required'],
            'maximum_hp' => ['required'],
            'hit_dice' => ['required'],
            'equipment' => ['required'],
            'traits' => ['required'],
            'ideaux' => ['required'],
            'liens' => ['required'],
            'defauts' => ['required'],
            // Second page
            'abilities' => ['required', 'array'],
            'abilities.*.attributes' => ['array', 'required'],
            'abilities.*.savingThrow' => ['array', 'required'],
            'abilities.*.skills' => ['array', 'sometimes'],
            // Third page

            // Fourth page

            // Fifth page
            'coins' => ['array', 'required'],
            'coins.*' => ['nullable', 'integer']
        ];
    }
}
