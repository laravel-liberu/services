<?php

namespace LaravelEnso\Services\app\Tables\Builders\Administration;

use LaravelEnso\Services\app\Service;
use LaravelEnso\Tables\app\Services\Table;

class ServiceTable extends Table
{
    protected $templatePath = __DIR__.'/../../Templates/Administration/services.json';

    public function query()
    {
        return Service::selectRaw('
            services.id as "dtRowId",
            services.id,
            services.name,
            services.description,
            services.is_monitored,
            services.is_active
        ');
    }
}
