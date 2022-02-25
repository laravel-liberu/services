<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Forms\Builders\Service;

class Create extends Controller
{
    public function __invoke(Service $form)
    {
        return ['form' => $form->create()];
    }
}
