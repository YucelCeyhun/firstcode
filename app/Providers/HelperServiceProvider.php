<?php

namespace App\Providers;

use App\Helper\General;
use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('generalHelper',function ($app){
            return $app->make(General::class);
        });
    }

}
