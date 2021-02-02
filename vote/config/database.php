<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

return [

    /*
     *--------------------------------------------------------------------------
     * Default Database Connection Name
     *--------------------------------------------------------------------------
     *
     * Here you may specify which of the database connections below you wish
     * to use as your default connection for all database work.
     *
     */

    'default' => env('DB_CONNECTION', 'mysql'),

    /*
     *--------------------------------------------------------------------------
     * Database Connections
     *--------------------------------------------------------------------------
     *
     * Here are each of the database connections setup for your application.
     *
     */

    'connections' => [

        'mysql' => [
            'host'     => env('DB_HOST', 'localhost'),
            'port'     => env('DB_PORT', '3306'),
            'database' => env('DB_DATABASE', 'ironman'),
            'username' => env('DB_USERNAME', 'ironman'),
            'password' => env('DB_PASSWORD', 'secret'),
            'prefix'   => env('DB_PREFIX', ''),
        ],

    ],

];
