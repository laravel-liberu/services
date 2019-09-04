<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use LaravelEnso\Services\app\Service;
use Illuminate\Routing\Controller;

class Destroy extends Controller
{
    public function __invoke(Service $service)
    {
        $service->delete();

        return [
            'message' => __('The service was successfully deleted'),
            'redirect' => 'administration.services.index',
        ];
    }
}
