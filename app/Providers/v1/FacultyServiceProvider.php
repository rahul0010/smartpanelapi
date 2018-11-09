<?php

namespace App\Providers\v1;

use Illuminate\Support\ServiceProvider;

class FacultyServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(FacultyService::class, function($app)
        {
            return new FacultyService();
        });
    }
}
