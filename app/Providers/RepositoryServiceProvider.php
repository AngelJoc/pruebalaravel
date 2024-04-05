<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Interfaces\{
    EloquentRepositoryInterface,
    ProductRepositoryInterface
};
use App\Repositories\{
    BaseRepository,
    ProductRepository
};
class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->app->bind(EloquentRepositoryInterface::class, BaseRepository::class);
        $this->app->bind(ProductRepositoryInterface:: class, ProductRepository::class);
    }
}
