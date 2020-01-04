<?php

use LaravelEnso\Migrator\App\Database\Migration;
use LaravelEnso\Permissions\App\Enums\Types;

class CreateStructureForServices extends Migration
{
    protected $permissions = [
        ['name' => 'services.index', 'description' => 'Show index for service', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'services.create', 'description' => 'Create service', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'services.store', 'description' => 'Store a new service', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'services.edit', 'description' => 'Edit service', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'services.update', 'description' => 'Update service', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'services.destroy', 'description' => 'Delete service', 'type' => Types::Write, 'is_default' => false],
        ['name' => 'services.initTable', 'description' => 'Init table for service', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'services.tableData', 'description' => 'Get table data for service', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'services.exportExcel', 'description' => 'Export excel for service', 'type' => Types::Read, 'is_default' => false],
        ['name' => 'services.options', 'description' => 'Get service options for select', 'type' => Types::Read, 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Services', 'icon' => 'handshake', 'route' => 'services.index', 'order_index' => 230, 'has_children' => false,
    ];
}
