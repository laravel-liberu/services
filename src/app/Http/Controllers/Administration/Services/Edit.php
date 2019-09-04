<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use LaravelEnso\Services\app\Service;
use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Forms\Builders\Administration\ServiceForm;

class Edit extends Controller
{
    public function __invoke(Service $service, ServiceForm $form)
    {
        return ['form' => $form->edit($service)];
    }
}
