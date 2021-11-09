<?php
namespace Iayoo\MysqlLogger;

use Illuminate\Support\ServiceProvider;
use Laravel\Sanctum\Sanctum;

class MonologMysqlProvider extends ServiceProvider
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
        if (app()->runningInConsole()) {
            $this->registerMigrations();
//            $this->publishes([
//                __DIR__ . '/../database/migrations' => database_path('migrations'),
//            ], 'iayoo-mysql-migrations');
        }

//        return $this->loadMigrationsFrom(__DIR__.'/../../../migrations');
    }

    /**
     * Register Sanctum's migration files.
     *
     * @return void
     */
    protected function registerMigrations()
    {
        if (Sanctum::shouldRunMigrations()) {
            return $this->loadMigrationsFrom(__DIR__ . '/../database/migrations');
        }
    }

    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {

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