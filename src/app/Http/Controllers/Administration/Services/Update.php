<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use LaravelEnso\Services\app\Service;
use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Http\Requests\Administration\ValidateServiceStore;

class Update extends Controller
{
    public function __invoke(ValidateServiceStore $request, Service $service)
    {
        $service->update($request->validated());

        return ['message' => __('The service was successfully updated')];
    }
}
