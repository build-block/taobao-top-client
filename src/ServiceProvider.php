<?php

namespace Remxcode\TopClient;

use Illuminate\Contracts\Foundation\Application;
use Illuminate\Support\ServiceProvider as baseServiceProvider;

class ServiceProvider extends baseServiceProvider
{

    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        $this->setupConfig();
    }


    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath(__DIR__ . '/../config/taobaotop.php');
        $this->publishes([ $source => config_path('taobaotop.php') ]);
        $this->mergeConfigFrom($source, 'taobaotop');
    }


    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->registerFactory($this->app);
        $this->registerManager($this->app);
    }


    /**
     * Register the factory class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function registerFactory(Application $app)
    {
        $app->singleton('topclient.factory', function ($app) {
            return new Factories\TopClientFactory();
        });
        $app->alias('topclient.factory', 'Remxcode\TopClient\Factories\TopClientFactory');
    }


    /**
     * Register the manager class.
     *
     * @param \Illuminate\Contracts\Foundation\Application $app
     *
     * @return void
     */
    protected function registerManager(Application $app)
    {
        $app->singleton('topclient', function ($app) {
            $config  = $app['config'];
            $factory = $app['topclient.factory'];

            return new Manager($config, $factory);
        });
        $app->alias('topclient', 'Remxcode\TopClient\Manager');
    }


    /**
     * Get the services provided by the provider.
     *
     * @return string[]
     */
    public function provides()
    {
        return [
            'topclient',
            'topclient.factory',
        ];
    }
}