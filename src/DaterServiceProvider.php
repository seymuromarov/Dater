<?php

namespace Seymuromarov\Dater;

use Illuminate\Support\ServiceProvider;

class DaterServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('seymuromarov-dater', function () {
            return new DaterOperator();
        });
    }
}
