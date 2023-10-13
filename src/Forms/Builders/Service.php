<?php

namespace LaravelLiberu\Services\Forms\Builders;

use LaravelLiberu\Forms\Services\Form;
use LaravelLiberu\Services\Models\Service as Model;

class Service
{
    private const TemplatePath = __DIR__.'/../Templates/service.json';

    private $form;

    public function __construct()
    {
        $this->form = new Form($this->templatePath());
    }

    public function create()
    {
        return $this->form->create();
    }

    public function edit(Model $service)
    {
        return $this->form->edit($service);
    }

    protected function templatePath(): string
    {
        return self::TemplatePath;
    }
}
