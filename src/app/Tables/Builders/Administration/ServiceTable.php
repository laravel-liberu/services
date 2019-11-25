<?php

namespace LaravelEnso\Services\app\Tables\Builders\Administration;

use Illuminate\Database\Eloquent\Builder;
use LaravelEnso\Services\app\Service;
use LaravelEnso\Tables\app\Contracts\Table;

class ServiceTable implements Table
{
    protected const TemplatePath = __DIR__.'/../../Templates/Administration/services.json';

    public function query(): Builder
    {
        return Service::selectRaw('
            services.id, 
            services.name, 
            services.code, 
            services.list_price, 
            services.vat_percent, 
            services.is_active
            services.description, 
            measurement_units.name
        ')->join('measurement_units', 'measurement_units.id','=', 'services.measurement_unit_id');
    }

    public function templatePath(): string
    {
        return static::TemplatePath;
    }
}
