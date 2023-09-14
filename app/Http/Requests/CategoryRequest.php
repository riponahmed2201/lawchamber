<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class CategoryRequest extends FormRequest
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
        if (isset($this->category_id)) {

            return [
                'name'    => ['required', Rule::unique('categories')->ignore($this->category_id)],
                'status'  => 'required',
            ];
        }

        return [
            'name'      => 'required|unique:categories,name',
            'status'    => 'required',
        ];
    }
}
