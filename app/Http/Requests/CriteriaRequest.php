<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class CriteriaRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'criteria_name' => 'required|string',
            'weight' => 'required|numeric',
            'type' => 'required|in:Cost,Benefit'
        ];
    }
}