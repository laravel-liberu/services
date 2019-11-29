<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Http\Requests\ValidateServiceRequest;
use LaravelEnso\Services\app\Models\Service;

class Store extends Controller
{
    public function __invoke(ValidateServiceRequest $request, Service $service)
    {
        $service->inCents(false)
            ->fill($request->validated())
            ->save();

        return [
            'message' => __('The service was successfully created'),
            'redirect' => 'services.edit',
            'param' => ['service' => $service->id],
        ];
    }
}
