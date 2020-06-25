<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Http\Requests\ValidateServiceRequest;
use LaravelEnso\Services\Models\Service;

class Update extends Controller
{
    public function __invoke(ValidateServiceRequest $request, Service $service)
    {
        $service->update($request->validated());

        return ['message' => __('The service was successfully updated')];
    }
}
