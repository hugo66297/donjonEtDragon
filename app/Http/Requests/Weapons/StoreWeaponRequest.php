<?php

namespace App\Http\Requests\Weapons;

use Illuminate\Foundation\Http\FormRequest;

class StoreWeaponRequest extends FormRequest
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
            'name' => ['required', 'string'],
            'atk_bonus' => ['required', 'string', 'size:3'],
            'damage_type' => ['required', 'string'],
            'sub_info' => ['nullable', 'string'],
        ];
    }
}
