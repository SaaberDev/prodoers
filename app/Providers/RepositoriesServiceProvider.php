<?php

namespace App\Providers;

use App\Repositories\Services\ServiceCategoryRepository;
use App\Repositories\Services\ServiceCategoryRepositoryInterface;
use Illuminate\Support\ServiceProvider;

class RepositoriesServiceProvider extends ServiceProvider
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
//        $this->app->bind(ServiceCategoryRepositoryInterface::class, ServiceCategoryRepository::class);
    }
}
