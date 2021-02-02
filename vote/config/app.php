<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

return [

    /*
     *--------------------------------------------------------------------------
     * Application Name
     *--------------------------------------------------------------------------
     *
     * This value is the name of your application. This value is used when the
     * framework needs to place the application's name in a notification or
     * any other location as required by the application or its packages.
     *
     */

    'name' => env('APP_NAME', 'IronPHP'),

    /*
     *--------------------------------------------------------------------------
     * Application Environment
     *--------------------------------------------------------------------------
     *
     * This value determines the "environment" your application is currently
     * running in. [pro/dev]
     *
     */

    'env' => env('APP_ENV', 'pro'),

    /*
     *--------------------------------------------------------------------------
     * Application Debug Mode
     *--------------------------------------------------------------------------
     *
     * When your application is in debug mode, detailed error messages with
     * stack traces will be shown on every error that occurs within your
     * application. If disabled, a simple generic error page is shown.
     *
     */

    'debug' => env('APP_DEBUG', false),

    /*
     *--------------------------------------------------------------------------
     * Application URL
     *--------------------------------------------------------------------------
     *
     * This URL is used by the console to properly generate URLs when using
     * the Jarvis command line tool.
     *
     */

    'url' => env('APP_URL', 'http://localhost'),

    /*
     *--------------------------------------------------------------------------
     * Application Timezone
     *--------------------------------------------------------------------------
     *
     * Here you may specify the default timezone for your application, which
     * will be used by the PHP date and date-time functions.
     *
     */

    'timezone' => 'Asia/Kolkata',

    /*
     *--------------------------------------------------------------------------
     * Application Locale Configuration
     *--------------------------------------------------------------------------
     *
     * The application locale determines the default locale.
     *
     */

    'locale' => 'en',
    /*
     *--------------------------------------------------------------------------
     * Application password salt
     *--------------------------------------------------------------------------
     *
     * The application password salt used to encrypt password.
     *
     */

    'salt' => '498#2D83B631%3800EBD!801600D*7E3CC13',
];
