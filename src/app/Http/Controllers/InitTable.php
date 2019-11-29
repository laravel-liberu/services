<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Tables\Builders\ServiceTable;
use LaravelEnso\Tables\app\Traits\Init;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = ServiceTable::class;
}
