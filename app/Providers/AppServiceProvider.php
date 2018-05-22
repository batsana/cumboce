<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;
use View;
use App\Consulta;
use App\User;
use Auth;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
          Schema::defaultStringLength('191');
          View::share('consultass', Consulta::orderBy('id', 'desc')->get());
           View::share('users', User::orderBy('id', 'desc')->get());
           
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}
