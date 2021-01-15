<?php

namespace Allans\productApi;

use Illuminate\Support\ServiceProvider;

class ProductApiServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->make('Allans\productApi\ProductsApiController');
        $this->loadViewsFrom(__DIR__.'/views', 'productApi');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        include __DIR__.'/routes.php';
    }
}
