<?php

namespace Hdelima\MoneyGateway\Providers;

use Illuminate\Support\ServiceProvider;
use Hdelima\MoneyGateway\Services\MoneyGateway as MoneyGatewayClient;

class MoneyGatewayProvider extends ServiceProvider
{
    protected $defer = false;

    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../../config/config.php' => config_path(
                'moneygateway.php'
            ),
        ]);

        $this->loadMigrationsFrom(__DIR__ . '/../../migrations');
    }

    public function register()
    {
        $this->registerMoneyGateway();

        $this->mergeConfig();
    }

    public function registerMoneyGateway()
    {
        $this->app->singleton('moneygateway_client', static function () {
            return new MoneyGatewayClient();
        });
    }

    public function mergeConfig()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../../config/config.php',
            'moneygateway'
        );
    }
}
