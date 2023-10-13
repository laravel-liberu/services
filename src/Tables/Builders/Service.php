<?php

namespace LaravelLiberu\Services\Tables\Builders;

use Illuminate\Database\Eloquent\Builder;
use LaravelLiberu\Services\Models\Service as Model;
use LaravelLiberu\Tables\Contracts\Table;

class Service implements Table
{
    private const TemplatePath = __DIR__.'/../Templates/services.json';

    public function query(): Builder
    {
        return Model::selectRaw('
            services.id, services.name, services.code, services.list_price, services.vat_percent,
            services.is_active, services.description,  measurement_units.name as measurementUnit
        ')->join('measurement_units', 'measurement_units.id', '=', 'services.measurement_unit_id');
    }

    public function templatePath(): string
    {
        return self::TemplatePath;
    }
}
