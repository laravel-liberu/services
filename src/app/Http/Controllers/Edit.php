<?php

namespace LaravelEnso\Services\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\App\Forms\Builders\ServiceForm;
use LaravelEnso\Services\App\Models\Service;

class Edit extends Controller
{
    public function __invoke(Service $service, ServiceForm $form)
    {
        return ['form' => $form->edit($service)];
    }
}
