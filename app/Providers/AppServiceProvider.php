<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\model\article_sort;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $res = article_sort::all();
        view()->share('res','res');
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
