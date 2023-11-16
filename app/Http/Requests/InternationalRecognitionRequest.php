<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class InternationalRecognitionRequest extends FormRequest
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
        if (isset($this->international_recognition_id)) {

            return [
                'year_name'                     => ['required', Rule::unique('international_recognitions')->ignore($this->international_recognition_id)],
                // 'legal_details'                 => 'required',
                'partner_chamber_details'       => 'required',
                'status'                        => 'required',
            ];
        }

        return [
            'year_name'                     => 'required|unique:international_recognitions',
            // 'legal_details'                 => 'required',
            'partner_chamber_details'       => 'required',
            'status'                        => 'required',
        ];
    }
}
