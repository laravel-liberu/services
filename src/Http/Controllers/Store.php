<?php

namespace LaravelLiberu\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Services\Http\Requests\ValidateService;
use LaravelLiberu\Services\Models\Service;

class Store extends Controller
{
    public function __invoke(ValidateService $request, Service $service)
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
