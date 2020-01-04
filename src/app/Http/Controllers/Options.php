<?php

namespace LaravelEnso\Services\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Select\App\Traits\OptionsBuilder;
use LaravelEnso\Services\App\Models\Service;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = Service::class;
}
