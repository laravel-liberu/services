<?php

namespace LaravelEnso\Services\app\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Forms\Builders\ServiceForm;

class Create extends Controller
{
    public function __invoke(ServiceForm $form)
    {
        return ['form' => $form->create()];
    }
}
