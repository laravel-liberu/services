<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;
use LaravelEnso\Services\app\Service;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Service::class;
}
