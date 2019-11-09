<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Forms\Builders\Administration\ServiceForm;
use LaravelEnso\Services\app\Service;

class Edit extends Controller
{
    public function __invoke(Service $service, ServiceForm $form)
    {
        return ['form' => $form->edit($service)];
    }
}
