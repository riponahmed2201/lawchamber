<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PracticeAreasRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array|string>
     */
    public function rules(): array
    {
        if (isset($this->practice_areas_id)) {

            return [
                'name'              => ['required', Rule::unique('practice_areas')->ignore($this->practice_areas_id)],
                'details'           => 'required',
                'status'            => 'required',
            ];
        }

        return [
            'name'              => 'required|unique:practice_areas',
            'details'           => 'required',
            'status'            => 'required',
        ];
    }
}
