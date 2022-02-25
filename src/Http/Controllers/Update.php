<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Http\Requests\ValidateService;
use LaravelEnso\Services\Models\Service;

class Update extends Controller
{
    public function __invoke(ValidateService $request, Service $service)
    {
        $service->update($request->validated());

        return ['message' => __('The service was successfully updated')];
    }
}
