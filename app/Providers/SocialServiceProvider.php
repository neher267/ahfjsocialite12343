<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\UserSocial;

class SocialServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        UserSocial::observe(\App\Observers\UserSocialObserver::class);
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        
    }
}
