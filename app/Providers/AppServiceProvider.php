<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
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
        if ($this->is_ngrok()) {
            URL::forceScheme('https');
        }
    }

    public function is_ngrok()
    {
        return (strpos(URL::current(), 'ngrok.io') !== false);
    }
}
