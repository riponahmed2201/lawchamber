<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class DesignationRequest extends FormRequest
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
        if (isset($this->designation_id)) {
            return [
                'designation_name'  => ['required', Rule::unique('designations')->ignore($this->designation_id)],
                'status'            => 'required'
            ];
        }

        return [
            'designation_name'  => 'required|unique:designations',
            'status'            => 'required'
        ];
    }
}
