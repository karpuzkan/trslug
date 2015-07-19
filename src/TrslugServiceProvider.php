<?php

namespace Karpuzkan\Trslug;

use Illuminate\Support\ServiceProvider;

class TrslugServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
        $this->app->bind('Trslug', function($app){
            return new trslug();
        });

    }
}
