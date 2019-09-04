<?php

namespace LaravelEnso\Services;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{

    public function boot()
    {
        $this->load();
        $this->publish();
    }

    private function load()
    {
        $this->loadRoutesFrom(__DIR__ . '/routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/database/migrations');
        $this->mergeConfigFrom(__DIR__.'/config/services.php', 'services');
    }

    private function publish()
    {
        $this->publishes([
            __DIR__ . '/config' => config_path('laravel-enso'),
        ], 'services-config');

        $this->publishes([
            __DIR__.'/resources/js' => resource_path('js'),
        ], 'services-assets');

    }

    public function register()
    {
        //
    }
}
