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
            __DIR__.'/../public/models/trucks/0000_00_00_000000_create_websockets_statistics_entries_table.php' => public_path('models/trucks'),
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
