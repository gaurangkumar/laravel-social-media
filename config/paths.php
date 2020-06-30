<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */

/**
 * Path Constants.
 */

/*
 * These defines should only be edited if you have IronPHP installed in
 * a directory layout other than the way it is distributed.
 * When using custom settings be sure to use the DS and do not add a trailing DS.
 */

/*
 * The full path to the directory which holds "app", WITHOUT a trailing DS.
 */
//define('ROOT', dirname(__DIR__));

/*
 * The actual directory name for the application directory. Normally
 * named 'app'.
 */
if (defined('ROOT')) {
    define('APP_DIR', 'app');
}

/*
 * Path to the application's directory.
 */
if (defined('ROOT') && defined('APP_DIR')) {
    define('APP', ROOT.DS.APP_DIR.DS);
}

/*
 * Path to the config directory.
 */
if (defined('ROOT')) {
    define('CONFIG', ROOT.DS.'config'.DS);
}

/*
 * File path to the webroot directory.
 *
 * To derive your webroot from your webserver change this to:
 *
 * `define('WEB_ROOT', rtrim($_SERVER['DOCUMENT_ROOT'], DS) . DS);`
 */
if (defined('ROOT')) {
    define('WEB_ROOT', ROOT.DS.'public'.DS);
}

/*
 * Path to the tests directory.
 */
if (defined('ROOT')) {
    define('TESTS', ROOT.DS.'tests'.DS);
}

/*
 * Path to the temporary files directory.
 */
if (defined('ROOT')) {
    define('TMP', ROOT.DS.'tmp'.DS);
}

/*
 * Path to the logs directory.
 */
if (defined('TMP')) {
    define('LOGS', TMP.DS.'logs'.DS);
}

/*
 * Path to the cache files directory. It can be shared between hosts in a multi-server setup.
 */
if (defined('TMP')) {
    define('CACHE', TMP.'cache'.DS);
}

/*
 * The absolute path to the "IronPHP" directory, WITHOUT a trailing DS.
 *
 * IronPHP should always be installed with composer, so look there.
 * if installed as library by composer require ironphp/ironphp
 * then define('IRON_CORE_INCLUDE_PATH', ROOT . DS . 'vendor' . DS . 'ironphp' . DS . 'ironphp');
 * if installed as project by composer create-project ironphp/ironphp
 * then define('IRON_CORE_INCLUDE_PATH', ROOT );
 */
if (defined('ROOT')) {
    define('IRON_CORE_INCLUDE_PATH', ROOT);
}

/*
 * Path to the cake directory.
 */
if (defined('IRON_CORE_INCLUDE_PATH')) {
    define('CORE_PATH', IRON_CORE_INCLUDE_PATH.DS);
}
if (defined('CORE_PATH')) {
    define('IRON', CORE_PATH.'src'.DS);
}
