<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Tables\app\Traits\Excel;
use LaravelEnso\Services\app\Tables\Builders\Administration\ServiceTable;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = ServiceTable::class;
}
