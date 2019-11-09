<?php

namespace LaravelEnso\Services\app\Http\Requests\Administration;

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
            'name' => ['required', 'string', $this->unique()],
            'description' => 'nullable|string',
            'is_active' => 'boolean',
        ];
    }

    protected function unique()
    {
        return Rule::unique('services', 'name');
    }
}
