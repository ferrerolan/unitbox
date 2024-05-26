<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

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
    public function boot()
    {
        Schema::macro('createIfNotExists', function ($table, $callback) {
            if (!Schema::hasTable($table)) {
                Schema::create($table, $callback);
            }
        });
    }
}
