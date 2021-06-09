<?php

namespace LaravelEnso\Services\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateServiceRequest extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'measurement_unit_id' => 'required|exists:measurement_units,id',
            'name' => 'required|string',
            'code' => ['required', 'string', $this->uniqueCode()],
            'list_price' => 'required|numeric|min:0.01',
            'vat_percent' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ];
    }

    private function uniqueCode()
    {
        return Rule::unique('services', 'code')
            ->ignore($this->route('service')->id);
    }
}
