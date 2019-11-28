<?php

namespace LaravelEnso\Services\app\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule;

class ValidateServiceStore extends FormRequest
{
    public function authorize()
    {
        return true;
    }

    public function rules()
    {
        return [
            'measurement_unit_id' => 'required|exists:measurement_units,id',
            'name' => ['required', 'string', $this->uniqueName()],
            'code' => ['required', 'string', $this->uniqueCode()],
            'list_price' => 'required|numeric|min:0.01',
            'vat_percent' => 'required|integer|min:0',
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ];
    }

    protected function uniqueName()
    {
        return Rule::unique('services', 'name')
            ->ignore(optional($this->route('service'))->id);
    }

    private function uniqueCode()
    {
        return Rule::unique('services', 'code')
            ->ignore(optional($this->route('service'))->id);
    }
}
