<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class PeopleRequest extends FormRequest
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

        if (isset($this->people_id)) {
            return [
                'designation_name'  => 'required',
                'name'              => 'required',
                'email'             => ['required', Rule::unique('peoples')->ignore($this->people_id)],
                'phone_number'      => ['required', Rule::unique('peoples')->ignore($this->people_id)],
                'details'           => 'required',
                'facebook_link'     => 'required',
                'linkedin_link'     => 'required',
                'status'            => 'required'
            ];
        }

        return [
            'designation_name'  => 'required',
            'name'              => 'required',
            'email'             => 'required|unique:peoples',
            'phone_number'      => 'required|unique:peoples',
            'details'           => 'required',
            'facebook_link'     => 'required',
            'linkedin_link'     => 'required',
            'status'            => 'required'
        ];
    }
}
