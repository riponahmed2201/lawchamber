<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class OurClientRequest extends FormRequest
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
        if (isset($this->client_id)) {
            return [
                'name'              => ['required', Rule::unique('our_clients')->ignore($this->client_id)],
                'website_url'       => 'required',
                'details'           => 'required',
                'status'            => 'required'
            ];
        }

        return [
            'name'              => 'required|unique:our_clients',
            'website_url'       => 'required',
            'logo'              => 'required',
            'details'           => 'required',
            'status'            => 'required'
        ];
    }
}
