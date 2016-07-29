# Ao-ReCaptcha

## 1) Installation

Run
````
$ composer require alex-oliveira/ao-recaptcha
````

Add in your ".env"
````
RECAPTCHA_SITE_KEY=
RECAPTCHA_SECRET_KEY=
````

Add in your "config/app.php"
````
'providers' => [
    /*
     * Vendors Service Providers...
     */
    AoReCaptcha\ServiceProvider::class,
]
````

Run
````
$ php artisan vendor:publish
````

## 2) Using

Add before ``</head>``
````
{!! recaptcha()->script() !!}
````

Add between ``<form>`` and ``</form>``
````
{!! recaptcha()->input() !!}
````

Add in your controller
````
try {
    recaptcha()->check(request()->get('g-recaptcha-response'));
} catch (\Exception $e) {
    
}
````