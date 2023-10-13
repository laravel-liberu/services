<?php

namespace LaravelLiberu\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Services\Http\Requests\ValidateService;
use LaravelLiberu\Services\Models\Service;

class Update extends Controller
{
    public function __invoke(ValidateService $request, Service $service)
    {
        $service->update($request->validated());

        return ['message' => __('The service was successfully updated')];
    }
}
