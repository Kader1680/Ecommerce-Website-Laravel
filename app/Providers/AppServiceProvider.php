<?php

namespace App\Providers;

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

    // enforce laravel to use HTTPS in the production case insted of HTTP
    // HTTPs ensure the data trasnsmit encycpte bteweeb client and the server
    public function boot(): void
    {
        // if (config("app.env") === "production") {
        //      URL::forceScheme('https');
            
        // }
    }
}
