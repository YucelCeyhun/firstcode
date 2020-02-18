<?php

namespace App\Providers;

use App\Http\View\Composers\CategoriesComposer;
use App\Http\View\Composers\RouteNameComposer;
use Carbon\Carbon;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

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
        Carbon::setLocale('tr');
        Paginator::defaultView('pagination');

        View::composer('admin/*',RouteNameComposer::class);
        View::composer('main/header',CategoriesComposer::class);
    }
}
