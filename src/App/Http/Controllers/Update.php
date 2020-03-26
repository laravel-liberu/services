<?php

namespace LaravelEnso\Services\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\App\Http\Requests\ValidateServiceRequest;
use LaravelEnso\Services\App\Models\Service;

class Update extends Controller
{
    public function __invoke(ValidateServiceRequest $request, Service $service)
    {
        $service->update($request->validated());

        return ['message' => __('The service was successfully updated')];
    }
}
