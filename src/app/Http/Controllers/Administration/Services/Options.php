<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Service;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Service::class;
}
