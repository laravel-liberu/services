<?php

use Illuminate\Support\Facades\Route;

Route::middleware(['web', 'auth', 'core'])
    ->namespace('LaravelEnso\Services\App\Http\Controllers')
    ->prefix('api/services')
    ->as('services.')
    ->group(function () {
        Route::get('create', 'Create')->name('create');
        Route::post('', 'Store')->name('store');
        Route::get('{service}/edit', 'Edit')->name('edit');

        Route::patch('{service}', 'Update')->name('update');

        Route::delete('{service}', 'Destroy')->name('destroy');

        Route::get('initTable', 'InitTable')->name('initTable');
        Route::get('tableData', 'TableData')->name('tableData');
        Route::get('exportExcel', 'ExportExcel')->name('exportExcel');

        Route::get('options', 'Options')->name('options');
    });
