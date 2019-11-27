<?php

namespace LaravelEnso\Services\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\DynamicMethods\app\Traits\Relations;
use LaravelEnso\Helpers\app\Traits\ActiveState;
use LaravelEnso\Helpers\app\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Helpers\app\Traits\InCents;
use LaravelEnso\MeasurementUnits\app\Models\MeasurementUnit;
use LaravelEnso\Tables\app\Traits\TableCache;

class Service extends Model
{
    use AvoidsDeletionConflicts, InCents, ActiveState, TableCache, Relations;

    protected $fillable = ['measurement_unit_id', 'name', 'code', 'list_price',
        'vat_percent', 'description', 'is_active', ];

    protected $casts = ['is_active' => 'boolean'];

    protected $centAttributes = ['list_price'];

    public function measurementUnit()
    {
        return $this->belongsTo(MeasurementUnit::class);
    }
}
