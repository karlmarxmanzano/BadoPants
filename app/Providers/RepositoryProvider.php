<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class RepositoryProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(
            'App\Repositories\Items\ItemRepositoryInterface', 
            'App\Repositories\Items\EloquentItemRepository'
        );

        $this->app->bind(
            'App\Repositories\Categories\CategoryRepositoryInterface', 
            'App\Repositories\Categories\EloquentCategoryRepository'
        );

        $this->app->bind(
            'App\Repositories\Stores\StoreRepositoryInterface', 
            'App\Repositories\Stores\EloquentStoreRepository'
        );
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
