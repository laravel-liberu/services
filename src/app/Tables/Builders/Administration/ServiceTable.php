<?php

namespace LaravelEnso\Services\app\Tables\Builders\Administration;

use LaravelEnso\Services\app\Service;
use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Tables\app\Contracts\Table;

class ServiceTable implements Table
{
    protected const TemplatePath = __DIR__.'/../../Templates/Administration/services.json';

    public function query(): Builder
    {
        return Service::selectRaw('
            services.id, services.name, services.description, services.is_active
        ');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
