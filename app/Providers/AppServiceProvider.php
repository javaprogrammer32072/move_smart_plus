<?php

namespace App\Providers;

use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        //
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        // The project uses Bootstrap sitewide (no Tailwind), so pagination
        // links should render with Bootstrap's pagination markup/classes.
        Paginator::useBootstrap();
    }
}
