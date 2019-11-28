<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Http\Requests\ValidateServiceStore;
use LaravelEnso\Services\app\Models\Service;

class Update extends Controller
{
    public function __invoke(ValidateServiceStore $request, Service $service)
    {
        $service->inCents(false)
            ->update($request->validated());

        return ['message' => __('The service was successfully updated')];
    }
}
