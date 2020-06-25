<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Forms\Builders\ServiceForm;
use LaravelEnso\Services\Models\Service;

class Edit extends Controller
{
    public function __invoke(Service $service, ServiceForm $form)
    {
        return ['form' => $form->edit($service)];
    }
}
