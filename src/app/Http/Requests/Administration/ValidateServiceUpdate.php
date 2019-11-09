<?php

namespace LaravelEnso\Services\app\Http\Requests\Administration;

class ValidateServiceUpdate extends ValidateServiceStore
{
    protected function unique()
    {
        return Rule::unique('services', 'id')
            ->ignore($this->route('service')->id);
    }
}
