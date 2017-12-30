<?php

namespace Emiliolodigiani\Bs3;

use Illuminate\Support\ServiceProvider;

class Bs3ServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            /*
            $this->publishes([
                __DIR__.'/../config/bs3.php' => config_path('bs3.php'),
            ], 'config');
            */
            $this->loadViewsFrom(__DIR__.'/../resources/views', 'bs3');
            /*
            $this->publishes([
                __DIR__.'/../resources/views' => base_path('resources/views/vendor/bs3'),
            ], 'views');
            */
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        //$this->mergeConfigFrom(__DIR__.'/../config/config.php', 'skeleton');
    }
}
