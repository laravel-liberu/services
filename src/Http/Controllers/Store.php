<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Http\Requests\ValidateServiceRequest;
use LaravelEnso\Services\Models\Service;

class Store extends Controller
{
    public function __invoke(ValidateServiceRequest $request, Service $service)
    {
        $service->fill($request->validated())
            ->save();

        return [
            'message' => __('The service was successfully created'),
            'redirect' => 'services.edit',
            'param' => ['service' => $service->id],
        ];
    }
}
