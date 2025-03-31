<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Helpers\SMSHandler;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     */
    public function register(): void
    {
        $this->app->singleton(SMSHandler::class, function($app){
            return new SMSHandler();
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
