<?php

namespace LaravelEnso\Services\app\Forms\Builders;

use LaravelEnso\Forms\app\Services\Form;
use LaravelEnso\Services\app\Models\Service;

class ServiceForm
{
    private const TemplatePath = __DIR__.'/../Templates/service.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form(self::TemplatePath);
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Service $service)
    {
        return $this->form->edit($service->inCents(false));
    }
}
