<?php

namespace LaravelEnso\Services\app\Http\Controllers\Administration\Services;

use Illuminate\Routing\Controller;
use LaravelEnso\Services\app\Forms\Builders\Administration\ServiceForm;

class Create extends Controller
{
    public function __invoke(ServiceForm $form)
    {
        return ['form' => $form->create()];
    }
}
