<?php

namespace LaravelEnso\Services\app;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\app\Traits\AvoidsDeletionConflicts;

class Service extends Model
{
    use AvoidsDeletionConflicts;
    
    protected $fillable = [
        'name', 'description', 'is_monitored', 'is_active'
    ];

    protected $casts = [
        'is_monitored' => 'boolean',
        'is_active' => 'boolean',
    ];
}
