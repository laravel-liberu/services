<?php

namespace LaravelLiberu\Services\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use LaravelLiberu\DynamicMethods\Traits\Abilities;
use LaravelLiberu\Helpers\Traits\ActiveState;
use LaravelLiberu\Helpers\Traits\AvoidsDeletionConflicts;
use LaravelLiberu\MeasurementUnits\Models\MeasurementUnit;
use LaravelLiberu\Rememberable\Traits\Rememberable;
use LaravelLiberu\Tables\Traits\TableCache;

class Service extends Model
{
    use Abilities, ActiveState, AvoidsDeletionConflicts, HasFactory;
    use TableCache, Rememberable;

    protected $guarded = ['id'];

    protected $casts = ['is_active' => 'boolean'];

    public function measurementUnit()
    {
        return $this->belongsTo(MeasurementUnit::class);
    }
}
