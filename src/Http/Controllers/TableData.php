<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Tables\Builders\Service;
use LaravelEnso\Tables\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = Service::class;
}
