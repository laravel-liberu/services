<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Select\Traits\OptionsBuilder;
use LaravelEnso\Services\Models\Service;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = Service::class;
}
