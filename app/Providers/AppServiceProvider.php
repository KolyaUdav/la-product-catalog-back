<?php

namespace App\Providers;

use App\Handling\HandleCatalogItem;
use App\Handling\IHandle;
use App\Shaping\ShapeCatalogItem;
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
        $this->app->bind(IHandle::class, function ($app) {
            return new HandleCatalogItem(new ShapeCatalogItem());
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
