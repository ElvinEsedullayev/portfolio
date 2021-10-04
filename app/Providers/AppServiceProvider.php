<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Pagination\Paginator;//pagination normal gorunmesi ucun elave etdik birde boot icinde bir kod elave etdik
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
        Paginator::useBootstrap();//pagination normal gorunmesi ucun elave etdik birde namespace altinda bir kod elave etdik
    }
}
