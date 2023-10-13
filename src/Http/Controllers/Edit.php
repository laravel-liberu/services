<?php

namespace LaravelLiberu\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelLiberu\Services\Forms\Builders\Service;
use LaravelLiberu\Services\Models\Service as Model;

class Edit extends Controller
{
    public function __invoke(Model $service, Service $form)
    {
        return ['form' => $form->edit($service)];
    }
}
