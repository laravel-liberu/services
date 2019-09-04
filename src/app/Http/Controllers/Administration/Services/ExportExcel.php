<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use LaravelEnso\Services\app\Tables\Builders\Administration\ServiceTable;
use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = ServiceTable::class;
}
