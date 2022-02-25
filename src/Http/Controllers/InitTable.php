<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Tables\Builders\Service;
use LaravelEnso\Tables\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected string $tableClass = Service::class;
}
