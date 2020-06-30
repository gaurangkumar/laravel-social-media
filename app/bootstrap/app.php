<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

/**
 *--------------------------------------------------------------------------
 * Create The Application
 *--------------------------------------------------------------------------.
 *
 * The first thing we will do is create a new IronPHP application instance
 * which serves as the "glue" for all the components of IronPHP.
 */
use Friday\Foundation\Server;

$app = new Server(
    realpath(__DIR__.'/../../')
);

return $app;
