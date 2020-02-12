<?php

namespace LaravelEnso\Services\App\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\DynamicMethods\App\Traits\Relations;
use LaravelEnso\Helpers\App\Traits\ActiveState;
use LaravelEnso\Helpers\App\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Helpers\App\Traits\InCents;
use LaravelEnso\MeasurementUnits\App\Models\MeasurementUnit;
use LaravelEnso\Rememberable\App\Traits\Rememberable;
use LaravelEnso\Tables\App\Traits\TableCache;

class Service extends Model
{
    use AvoidsDeletionConflicts, InCents, ActiveState, TableCache, Relations, Rememberable;

    protected $fillable = [
        'measurement_unit_id', 'name', 'code', 'list_price',
        'vat_percent', 'description', 'is_active',
    ];

    protected $casts = ['is_active' => 'boolean'];

    protected $centAttributes = ['list_price'];

    public function measurementUnit()
    {
        return $this->belongsTo(MeasurementUnit::class);
    }
}
