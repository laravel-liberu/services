<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Tables\Builders\ServiceTable;
use LaravelEnso\Tables\app\Traits\Data;

class TableData extends Controller
{
    use Data;

    protected $tableClass = ServiceTable::class;
}
