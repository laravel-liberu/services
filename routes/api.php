<?php

use Illuminate\Support\Facades\Route;
use LaravelLiberu\Services\Http\Controllers\Create;
use LaravelLiberu\Services\Http\Controllers\Destroy;
use LaravelLiberu\Services\Http\Controllers\Edit;
use LaravelLiberu\Services\Http\Controllers\ExportExcel;
use LaravelLiberu\Services\Http\Controllers\InitTable;
use LaravelLiberu\Services\Http\Controllers\Options;
use LaravelLiberu\Services\Http\Controllers\Store;
use LaravelLiberu\Services\Http\Controllers\TableData;
use LaravelLiberu\Services\Http\Controllers\Update;

Route::middleware(['api', 'auth', 'core'])
    ->prefix('api/services')
    ->as('services.')
    ->group(function () {
        Route::get('create', Create::class)->name('create');
        Route::post('', Store::class)->name('store');
        Route::get('{service}/edit', Edit::class)->name('edit');

        Route::patch('{service}', Update::class)->name('update');

        Route::delete('{service}', Destroy::class)->name('destroy');

        Route::get('initTable', InitTable::class)->name('initTable');
        Route::get('tableData', TableData::class)->name('tableData');
        Route::get('exportExcel', ExportExcel::class)->name('exportExcel');

        Route::get('options', Options::class)->name('options');
    });
