<?php

namespace LaravelEnso\Services\App\Http\Controllers;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\App\Forms\Builders\ServiceForm;

class Create extends Controller
{
    public function __invoke(ServiceForm $form)
    {
        return ['form' => $form->create()];
    }
}
