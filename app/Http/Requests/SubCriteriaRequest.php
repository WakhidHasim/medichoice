<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class SubCriteriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'criteria_id' => 'required|exists:criterias,id',
            'sub_criteria' => 'required|string',
            'parameter' => 'required|string',
            'value' => 'required|numeric'
        ];
    }
}