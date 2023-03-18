<?php

namespace App\Providers;

use Illuminate\Foundation\Vite;
use Illuminate\Pagination\Paginator;
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
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useTailwind();
        Vite::macro('image', fn (string $asset) => $this->asset("resources/assets/img/{$asset}"));
    }
}
