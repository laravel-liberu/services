<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Data;
use LaravelEnso\Services\app\Tables\Builders\Administration\ServiceTable;

class TableData extends Controller
{
    use Data;

    protected $tableClass = ServiceTable::class;
}
