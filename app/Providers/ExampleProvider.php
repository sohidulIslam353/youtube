<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class ExampleProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        // $data=database theke data anlam,

        $data=array();
        $data['a']=10;
        $data['b']=20;
        $data['c']=30;
        view()->share('number',$data);

    }
}
