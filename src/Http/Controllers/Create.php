<?php

namespace LaravelEnso\Services\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\Forms\Builders\ServiceForm;

class Create extends Controller
{
    public function __invoke(ServiceForm $form)
    {
        return ['form' => $form->create()];
    }
}
