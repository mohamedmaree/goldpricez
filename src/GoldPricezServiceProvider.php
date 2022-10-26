<?php
namespace Maree\GoldPricez;

use Illuminate\Support\ServiceProvider;

class GoldPricezServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/config/GoldPricez.php' => config_path('GoldPricez.php'),
        ],'GoldPricez');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->mergeConfigFrom(
            __DIR__.'/config/GoldPricez.php', 'GoldPricez'
        );
    }
}
