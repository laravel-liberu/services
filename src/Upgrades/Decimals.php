<?php

namespace LaravelEnso\Services\Upgrades;

use Illuminate\Support\Facades\Schema;
use LaravelEnso\Upgrade\Contracts\Applicable;
use LaravelEnso\Upgrade\Contracts\MigratesTable;

class Decimals implements MigratesTable, Applicable
{
    public function isMigrated(): bool
    {
        return false;
    }

    public function applicable(): bool
    {
        return Schema::hasColumn('services', 'list_price');
    }

    public function migrateTable(): void
    {
        Schema::table('services', fn ($table) => $table
            ->unsignedDecimal('list_price', 13, 4)->change());
    }
}
