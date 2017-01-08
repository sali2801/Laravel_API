<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
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
		//Laravel-5-Generators package provides a variety of generators to speed up the development process.
        if ($this->app->environment() == 'local') {
        $this->app->register('Laracasts\Generators\GeneratorsServiceProvider');
        }
    }
}
