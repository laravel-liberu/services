<?php

namespace LaravelEnso\Services\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\App\Tables\Builders\ServiceTable;
use LaravelEnso\Tables\App\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected string $tableClass = ServiceTable::class;
}
