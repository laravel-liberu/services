<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use LaravelEnso\Services\app\Service;
use Illuminate\Routing\Controller;

class Show extends Controller
{
    public function __invoke(Service $service)
    {
        return ['service' => $service];
    }
}
