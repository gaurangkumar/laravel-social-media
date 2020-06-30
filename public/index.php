<?php
/**
 * The Front Controller for handling every request.
 *
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
define('IRONPHP_START', microtime(true));

$root = isset($root) ? $root : true;

// Check platform requirements
require dirname(__DIR__).'/config/requirements.php';

// For built-in server
if (PHP_SAPI === 'cli-server') {
    $_SERVER['PHP_SELF'] = '/'.basename(__FILE__);
    $url = parse_url($_SERVER['REQUEST_URI']);
    $uri = urldecode(
        '/'.ltrim(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH), '/')
    );
    $file = __DIR__.$url['path'];
    /*
     * This allows us to emulate Apache's "mod_rewrite" functionality from the
     * built-in PHP web server.
     */
    if (strpos($url['path'], '..') === false && strpos($url['path'], '.') !== false && is_file($file) && file_exists($file)) {
        if ($url['path'] === '/index.php') {
            echo 'Invalid Request !';
        }

        return false;
    }
}

/**
 *--------------------------------------------------------------------------
 * Register The Auto Loader
 *--------------------------------------------------------------------------.
 *
 * Composer provides a convenient, automatically generated class loader for
 * our application. We just need to utilize it! We'll simply require it
 * into the script here so that we don't have to worry about manual
 * loading any of our classes later on. It feels great to relax.
 */
require dirname(__DIR__).'/vendor/autoload.php';

/**
 *--------------------------------------------------------------------------
 * Turn On The Lights
 *--------------------------------------------------------------------------.
 *
 * We need to Friday PHP development, so let us turn on the lights.
 * This bootstraps the framework and gets it ready for use, then it
 * will load up this application so that we can run it and send
 * the responses back to the browser and delight our users.
 */
$app = require_once dirname(__DIR__).'/app/bootstrap/app.php';

define('IRONPHP_END', microtime(true));

if (env('APP_DEBUG')) {
    echo '<hr><pre>';
    echo 'CONFIG_LOADED   : '.round((CONFIG_LOADED - IRONPHP_START), 4).' seconds<br>';
    echo 'ROUTES_LOADED   : '.round((ROUTES_LOADED - CONFIG_LOADED), 4).' seconds<br>';
    echo 'REQUEST_CATCHED : '.round((REQUEST_CATCHED - ROUTES_LOADED), 4).' seconds<br>';
    echo 'ROUTE_MATCHED   : '.round((ROUTE_MATCHED - REQUEST_CATCHED), 4).' seconds<br>';
    echo 'DISPATCHER_INIT : '.round((DISPATCHER_INIT - ROUTE_MATCHED), 4).' seconds<br>';
    echo 'DISPATCHED      : '.round((DISPATCHED - DISPATCHER_INIT), 4).' seconds<br>';
    echo 'RESPONSE_SEND   : '.round((RESPONSE_SEND - DISPATCHED), 4).' seconds<br>';
    echo '--------------------------------<br>';
    echo 'TOTAL           : '.round((IRONPHP_END - IRONPHP_START), 4).' seconds<br>';
    echo '</pre>';
}
