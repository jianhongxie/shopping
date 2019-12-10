<?php

namespace NiuGengYun\EasyTBK;

use Illuminate\Foundation\Application as LaravelApplication;
use Laravel\Lumen\Application as LumenApplication;
use Illuminate\Support\ServiceProvider as LaravelServiceProvider;

class ServiceProvider extends LaravelServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->setupConfig ();
    }

    /**
     * Setup the config.
     *
     * @return void
     */
    protected function setupConfig()
    {
        $source = realpath (__DIR__ . '/config.php');
        if ($this->app instanceof LaravelApplication && $this->app->runningInConsole ()) {
            $this->publishes ([$source => config_path ('shoppingsdk.php')]);
        } elseif ($this->app instanceof LumenApplication) {
            $this->app->configure ('shoppingsdk');
        }
        $this->mergeConfigFrom ($source, 'shoppingsdk');
    }

}
