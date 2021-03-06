<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Packages\Application\PostUsecase;

class PostUsecaseServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind('PostUsecase', PostUsecase::class);
        // dd($this);
    }
}
