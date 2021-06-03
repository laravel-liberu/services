<?php

namespace LaravelEnso\Services\Upgrades;

use Illuminate\Support\Facades\Schema;
use LaravelEnso\Upgrade\Contracts\Applicable;
use LaravelEnso\Upgrade\Contracts\MigratesTable;
use LaravelEnso\Upgrade\Helpers\Column;

class MeasurementUnitNotNullable implements MigratesTable
{
    public function isMigrated(): bool
    {
        return false;
    }

    public function applicable(): bool
    {
        return Column::isNotNullable('services', 'measurement_unit_id');
    }

    public function migrateTable(): void
    {
        Schema::table('services', fn ($table) => $table->integer('measurement_unit_id')
            ->unsigned()->nullable(false)->change());
    }
}
