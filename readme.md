# Ao-ReCaptcha

## 1) Installation
````
$ composer require alex-oliveira/ao-recaptcha
````

````
RECAPTCHA_SITE_KEY=
RECAPTCHA_SECRET_KEY=
````

````
'providers' => [
    /*
     * Vendors Service Providers...
     */
    AoReCaptcha\ServiceProvider::class,
]
````

````
$ php artisan vendor:publish
````

## 2) Using
````
{!! recaptcha()->script() !!}
````

````
{!! recaptcha()->input() !!}
````

````
try {
    recaptcha()->check(request()->get('g-recaptcha-response'));
} catch (\Exception $e) {
    
}
````