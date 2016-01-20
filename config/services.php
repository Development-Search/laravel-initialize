<?php

$main = [

    /*
    |--------------------------------------------------------------------------
    | Third Party Services
    |--------------------------------------------------------------------------
    |
    | This file is for storing the credentials for third party services such
    | as Stripe, Mailgun, Mandrill, and others. This file provides a sane
    | default location for this type of information, allowing packages
    | to have a conventional place to find your various credentials.
    |
    */

    'mailgun' => [
        'domain' => null,
        'secret' => null,
    ],

    'mandrill' => [
        'secret' => null,
    ],

    'ses' => [
        'key'    => null,
        'secret' => null,
        'region' => 'us-east-1',
    ],

    'stripe' => [
        'model'  => App\User::class,
        'key'    => null,
        'secret' => null,
    ],

];

$envFile = __DIR__.'/'.APP_ENV.'/'.basename(__FILE__);
$env     = is_file($envFile)? require($envFile): [];
$config  = array_merge($main, $env);
return $config;
