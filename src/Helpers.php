<?php

if (!function_exists('recaptcha')) {

    /**
     * Get the available alert instance.
     *
     * @return \AoReCaptcha\ReCaptcha
     */
    function recaptcha()
    {
        return app('recaptcha');
    }

}