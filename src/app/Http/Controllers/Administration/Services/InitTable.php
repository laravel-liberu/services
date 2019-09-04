<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Init;
use LaravelEnso\Services\app\Tables\Builders\Administration\ServiceTable;

class InitTable extends Controller
{
    use Init;

    protected $tableClass = ServiceTable::class;
}
