<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {

    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        if(class_exists('\App\Lib\Helpers') && method_exists(new \App\Lib\Helpers(),'bootProviders')){
            \App\Lib\Helpers::bootProviders();
        }



    }
}
