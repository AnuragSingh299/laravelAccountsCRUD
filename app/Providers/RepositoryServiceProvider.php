<?php

namespace App\Providers;

use App\Http\Controllers\AccountController;
use Illuminate\Support\ServiceProvider;
use App\Interface\Account\AccountRepositoryInterface;
use App\Repository\Account\AccountRepository;

class RepositoryServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(AccountRepositoryInterface::class, AccountRepository::class);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
