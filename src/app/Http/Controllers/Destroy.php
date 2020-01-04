<?php

namespace LaravelEnso\Services\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\App\Models\Service;

class Destroy extends Controller
{
    public function __invoke(Service $service)
    {
        $service->delete();

        return [
            'message' => __('The service was successfully deleted'),
            'redirect' => 'services.index',
        ];
    }
}
