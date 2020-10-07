<?php

namespace LaravelEnso\Services\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\DynamicMethods\Traits\Abilities;
use LaravelEnso\Helpers\Traits\ActiveState;
use LaravelEnso\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelEnso\Helpers\Traits\HasFactory;
use LaravelEnso\MeasurementUnits\Models\MeasurementUnit;
use LaravelEnso\Rememberable\Traits\Rememberable;
use LaravelEnso\Tables\Traits\TableCache;

class Service extends Model
{
    use Abilities,
        ActiveState,
        AvoidsDeletionConflicts,
        HasFactory,
        TableCache,
        Rememberable;

    protected $guarded = ['id'];

    protected $casts = ['is_active' => 'boolean'];

    public function measurementUnit()
    {
        return $this->belongsTo(MeasurementUnit::class);
    }
}
