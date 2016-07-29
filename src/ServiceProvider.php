<?php

namespace AoReCaptcha;

use Illuminate\Support\ServiceProvider as BaseServiceProvider;

class ServiceProvider extends BaseServiceProvider
{

    public function boot()
    {
        $this->loadTranslationsFrom(__DIR__ . '/Langs', 'ao-recaptcha');
        $this->app->singleton('recaptcha', function ($app) {
            return new ReCaptcha();
        });
    }

    public function register()
    {
        require_once(__DIR__ . '/Helpers.php');
    }

}