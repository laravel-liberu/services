<?php

namespace LaravelEnso\Services\app\Models;

use Illuminate\Database\Eloquent\Model;
use LaravelEnso\Helpers\app\Traits\AvoidsDeletionConflicts;

class Service extends Model
{
    use AvoidsDeletionConflicts;

    protected $fillable = ['name', 'description', 'is_active'];

    protected $casts = ['is_active' => 'boolean'];
}
