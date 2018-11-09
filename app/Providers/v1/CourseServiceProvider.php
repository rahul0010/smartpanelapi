<?php

namespace App\Providers\v1;

use Illuminate\Support\ServiceProvider;
use App\Services\v1;

class CourseServiceProvider extends ServiceProvider
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
        $this->app->bind(CourseService::class, function ($app){
            return new CourseService();
        });
    }
}
