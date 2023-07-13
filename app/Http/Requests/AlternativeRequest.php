<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class AlternativeRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'hospital_id' => 'required|exists:hospitals,id',
            'quality' => 'required|numeric',
            'facilities' => 'required|numeric',
            'cost' => 'required|numeric',
            'location' => 'required|numeric'
        ];
    }
}
