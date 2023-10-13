<?php

namespace LaravelLiberu\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Select\Traits\OptionsBuilder;
use LaravelLiberu\Services\Models\Service;

class Options extends Controller
{
    use OptionsBuilder;

    protected string $model = Service::class;
}
