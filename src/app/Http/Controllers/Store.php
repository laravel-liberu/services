<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Http\Requests\ValidateServiceStore;
use LaravelEnso\Services\app\Models\Service;

class Store extends Controller
{
    public function __invoke(ValidateServiceStore $request, Service $service)
    {
        $service->inCents(false)
            ->fill($request->validated())
            ->save();

        return [
            'message' => __('The service was successfully created'),
            'redirect' => 'administration.services.edit',
            'param' => ['service' => $service->id],
        ];
    }
}
