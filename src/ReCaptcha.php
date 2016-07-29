<?php

namespace AoReCaptcha;

use GuzzleHttp\Client;

class ReCaptcha
{

    public function script()
    {
        return '<script src="https://www.google.com/recaptcha/api.js"></script>';
    }

    public function input()
    {
        return '<div class="g-recaptcha" data-sitekey="' . env('RECAPTCHA_SITE_KEY') . '"></div>';
    }

    public static function check($response = null)
    {
        if (empty($response) || !is_string($response) || $response == null || $response == false || strlen($response) == 0)
            abort(400, trans('ao-recaptcha::messages.required'));

        $data = [
            'form_params' => [
                'secret' => env('RECAPTCHA_SECRET_KEY'),
                'response' => $response,
            ]
        ];

        try {
            $client = new Client();
            $response = $client->request('POST', 'https://www.google.com/recaptcha/api/siteverify', $data);
        } catch (\Exception $e) {
            abort(500, trans('ao-recaptcha::messages.error'));
        }

        if ($response->getStatusCode() != 200)
            abort(500, trans('ao-recaptcha::messages.error'));

        $json = json_decode($response->getBody()->getContents());
        if ($json->success === true)
            return true;

        return abort(412, trans('ao-recaptcha::messages.fail'));
    }

}
