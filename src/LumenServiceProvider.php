<?php 
namespace KamiOrz\Amqp;

use Illuminate\Support\ServiceProvider;

class LumenServiceProvider extends ServiceProvider
{

    /**
     * Perform post-registration booting of services.
     *
     * @return void
     */
    public function boot()
    {

    }

    /**
     * Register bindings in the container.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('KamiOrz\Amqp\Publisher', function ($app) {
            return new Publisher($app->config);
        });

        $this->app->bind('KamiOrz\Amqp\Consumer', function ($app) {
            return new Consumer($app->config);
        });

        $this->app->bind('Amqp', 'KamiOrz\Amqp\Amqp');

        if (!class_exists('Amqp')) {
            class_alias('KamiOrz\Amqp\Facades\Amqp', 'Amqp');
        }
    }

}