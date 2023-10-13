<?php

namespace LaravelLiberu\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Services\Tables\Builders\Service;
use LaravelLiberu\Tables\Traits\Excel;

class ExportExcel extends Controller
{
    use Excel;

    protected string $tableClass = Service::class;
}
