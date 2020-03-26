<?php

namespace LaravelEnso\Services\App\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Services\App\Models\Service;
use LaravelEnso\Tables\App\Contracts\Table;

class ServiceTable implements Table
{
    protected const TemplatePath = __DIR__.'/../Templates/services.json';

    public function query(): Builder
    {
        return Service::selectRaw('
            services.id, services.name, services.code, services.list_price, services.vat_percent,
            services.is_active, services.description,  measurement_units.name as measurementUnit
        ')->join('measurement_units', 'measurement_units.id', '=', 'services.measurement_unit_id');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
