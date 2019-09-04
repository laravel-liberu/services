<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use LaravelEnso\Services\app\Service;
use Illuminate\Http\Request;
use Illuminate\Routing\Controller;
use LaravelEnso\Select\app\Traits\OptionsBuilder;

class Options extends Controller
{
    use OptionsBuilder;

    protected $model = Service::class;

    //protected $queryAttributes = ['name'];

    //public function query(Request $request)
    //{
    //    return Service::query();
    //}
}
