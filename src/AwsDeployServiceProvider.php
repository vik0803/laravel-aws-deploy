<?php

namespace pinCnx\laravelAwsDeploy;

use Illuminate\Support\ServiceProvider;

class AwsDeployServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        if ($this->app->runningInConsole()) {
            $this->commands([
                Commands\AwsEC2Backup::class
            ]);
        }
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/config/services.php', 'services'
        );
    }
}
