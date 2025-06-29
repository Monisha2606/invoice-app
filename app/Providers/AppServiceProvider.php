<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Services\InvoiceCalculator;
use Illuminate\Filesystem\Filesystem;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton('InvoiceCalculator', function () {
            return new InvoiceCalculator();
        }); 
        // ✅ Register 'files' binding to fix error
    $this->app->bind('files', function () {
        return new \Illuminate\Filesystem\Filesystem();
    });
    }

    /**
     * Bootstrap any application services.
     */
    public function boot(): void
    {
        //
    }
}
