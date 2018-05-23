<?php

namespace Roy688\Ssh;

class ServiceProvider extends \Illuminate\Support\ServiceProvider
{
    
    const CONFIG_PATH = __DIR__ . '/../config/ssh.php';

    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    //protected $defer = true;

    public function boot()
    {
        $this->publishes([
            self::CONFIG_PATH => config_path('ssh.php'),
        ], 'config');
    }

    public function register()
    {
        $this->mergeConfigFrom(
            self::CONFIG_PATH,
            'ssh'
        );

        $this->app->bind('ssh', function () {
            return new Ssh();
        });

        $this->registerAliases();
    }

    /**
     * Register class aliases.
     *
     * @return void
     */
    protected function registerAliases()
    {
      $this->app->alias('ssh', 'Roy688\Ssh\Ssh');
    }

    /**
     * Get the services provided by the provider.
     *
     * @return array
     */
    public function provides()
    {
        return ['ssh'];
    }

}
