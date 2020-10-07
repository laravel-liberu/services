<?php

use Illuminate\Support\Facades\Route;
use LaravelEnso\Services\Http\Controllers\Create;
use LaravelEnso\Services\Http\Controllers\Destroy;
use LaravelEnso\Services\Http\Controllers\Edit;
use LaravelEnso\Services\Http\Controllers\ExportExcel;
use LaravelEnso\Services\Http\Controllers\InitTable;
use LaravelEnso\Services\Http\Controllers\Options;
use LaravelEnso\Services\Http\Controllers\Store;
use LaravelEnso\Services\Http\Controllers\TableData;
use LaravelEnso\Services\Http\Controllers\Update;

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
