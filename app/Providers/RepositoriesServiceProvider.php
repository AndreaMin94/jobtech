<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Repositories\QuotationRepository;
use App\Repositories\Interfaces\QuotationRepositoryInterface;

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
        $this->app->bind(QuotationRepositoryInterface::class, QuotationRepository::class);
    }
}
