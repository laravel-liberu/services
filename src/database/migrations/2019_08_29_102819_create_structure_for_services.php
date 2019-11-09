<?php

use LaravelEnso\Migrator\app\Database\Migration;

class CreateStructureForServices extends Migration
{
    protected $permissions = [
        ['name' => 'administration.services.index', 'description' => 'Show index for service', 'type' => 0, 'is_default' => false],
        ['name' => 'administration.services.create', 'description' => 'Create service', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.services.store', 'description' => 'Store a new service', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.services.edit', 'description' => 'Edit service', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.services.update', 'description' => 'Update service', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.services.destroy', 'description' => 'Delete service', 'type' => 1, 'is_default' => false],
        ['name' => 'administration.services.initTable', 'description' => 'Init table for service', 'type' => 0, 'is_default' => false],
        ['name' => 'administration.services.tableData', 'description' => 'Get table data for service', 'type' => 0, 'is_default' => false],
        ['name' => 'administration.services.exportExcel', 'description' => 'Export excel for service', 'type' => 0, 'is_default' => false],
        ['name' => 'administration.services.options', 'description' => 'Get service options for select', 'type' => 0, 'is_default' => false],
    ];

    protected $menu = [
        'name' => 'Services', 'icon' => 'hand-holding-usd', 'route' => 'administration.services.index', 'order_index' => 10, 'has_children' => false,
    ];

    protected $parentMenu = 'Administration';
}
