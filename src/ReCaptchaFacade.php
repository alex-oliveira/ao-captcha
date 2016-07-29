<?php

namespace AoReCaptcha;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Illuminate\View\Factory
 */
class ReCaptchaFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'recaptcha';
    }
}
