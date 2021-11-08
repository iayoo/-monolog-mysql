<?php
namespace Iayoo;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class MonologMysqlHandlerServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
//        $this->publishes([
//            __DIR__.'/../migrations/' => database_path('migrations')
//        ], 'iayoo-migrations');
//        if (Sanctum::shouldRunMigrations()) {
//            return $this->loadMigrationsFrom(__DIR__.'/../migrations');
//        }
//        $this->registerMigrations();
//        return $this->loadMigrationsFrom(__DIR__.'/../migrations');
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

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return array();
    }
}