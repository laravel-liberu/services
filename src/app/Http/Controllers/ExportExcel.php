<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Tables\Builders\ServiceTable;
use LaravelEnso\Tables\app\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected $tableClass = ServiceTable::class;
}
