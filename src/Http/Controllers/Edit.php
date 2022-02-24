<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Forms\Builders\Service;
use LaravelEnso\Services\Models\Service as Model;

class Edit extends Controller
{
    public function __invoke(Model $service, Service $form)
    {
        return ['form' => $form->edit($service)];
    }
}
