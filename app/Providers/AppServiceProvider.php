<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use Studio\Totem\Totem;

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
        Totem::auth(function ($request) {
            // return true / false . For e.g.
            return true;
            return Auth::check();
        });
        // solution to comflict with database utf8 unicode ci
        Schema::defaultStringLength('191');
    }
}
