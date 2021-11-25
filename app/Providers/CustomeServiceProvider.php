<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class CustomeServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        app()->bind('jogfol',function(){
            return new \App\Repositories\Jogfol;
        });
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
