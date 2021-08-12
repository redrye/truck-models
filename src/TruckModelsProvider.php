<?php

namespace Redrye\TruckModels;

use Illuminate\Support\ServiceProvider;

class TruckModelsProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__.'/../public/models/trucks' => public_path('models/trucks'),
        ], 'public');

    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        //
    }

}
