<?php

namespace App\Http\Requests\SubRaces;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Request;

class StoreSubRaceRequest extends FormRequest
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
            'name' => ['nullable', 'string'],
            'description' => ['required', 'string'],
            'is_after' => ['boolean'],
            'race_id' => ['required', 'integer']
        ];
    }
}
