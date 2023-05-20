<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
// 
// elle vas maipuler et bien gerer laa connexion a la bd
use Illuminate\Support\facades\Schema;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        // 
        Schema::defaultStringLength(191);
    }
}
