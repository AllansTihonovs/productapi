<?php

namespace Allans\Productapi;

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
        $this->app->make('Allans\Productapi\ProductsApiController');
        $this->loadViewsFrom(__DIR__.'/views', 'productapi');
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
