<?php
namespace Pegziq\MigrationsIncrease;


class MigrationsIncrease
{

    public function boot()
    {

    }

    protected function registerMigrationsIncreaseCommand()
    {
        $this->app['migrations::increase'] = $this->app->share(function () {
            return new Commands\MigrationsIncreaseCommand();
        });
    }

    public function register()
    {
        $this->registerMigrationsIncreaseCommand();
        $this->commands(
            'migrations::increase'
        );
    }


}