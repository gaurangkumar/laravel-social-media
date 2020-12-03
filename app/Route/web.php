<?php
/**
 * @auther        GaurangKumar Parmar <gaurangkumarp@gmail.com>
 */
use Friday\Http\Route;

/*
 *--------------------------------------------------------------------------
 * Web Routes
 *--------------------------------------------------------------------------
 *
 * Here is where you can register web routes for your application. Now
 * create something great!
 *
 */

// for CRUD operation use resource method,
Route::resource('/resrc', 'IndexController');
/*
 *
 * /          GET     @index
 * /create    GET     @create
 * /{id}      GET     @show
 * /{id}/edit GET     @edit
 * /          POST    @store
 * /{id}      PUT     @update
 * /{id}      DELETE  @destroy
 *
 */

// Route with controller@method. IndexController@Index is default
Route::get('/');
//Route::get('/index2', 'IndexController');
//Route::get('/index3', 'IndexController@Index');

// Named Route
Route::get('/name')->name('home');

// Route with arguments
Route::get('/name/{name}', function ($name) {
    echo 'Route with arguments<br>';
    echo 'Name: '.$name;
});

// Available Router Methods
//Route::get($uri, $callback);
//Route::post($uri, $callback);

// Route with POST method
Route::post('/post', function () {
    echo 'Route with POST method<br>Only run when called by POST method';
});

// Route with optional multiple arguments - must pass default argument to all optional arguments
Route::get('/member/{name}/{?id}', function ($name, $id = 1) {
    echo 'Route with optional multiple arguments - must pass default argument to all optional arguments<br>';
    echo "Name: [$id] $name";
    //echo '<br>Num of Args: '.func_num_args();
    //echo '<br>Args: ';print_r(func_get_args());
});

// Route with optional arguments - must pass default  argument
Route::get('/user/{?name}/', function ($name = 'GK') {
    echo 'Route with optional arguments - must pass default  argument<br>';
    echo "Name: $name";
    //echo '<br>Num of Args: '.func_num_args();
    //echo '<br>Args: ';print_r(func_get_args());
});

// Route with multiple arguments - must be in sequence
Route::get('/names/{id}/{name}', function ($id, $name) {
    echo 'Route with multiple arguments - must be in sequence<br>';
    echo "Name: [$id] $name";
});

// Route with view only (always GET method)
Route::view('/view', 'index', ['name' => 'IronPHP']);

// Route with callable
Route::get('/callable', function () {
    echo 'Route with callable argument<br>';
    echo 'callable run';
});

// Route with return callable
Route::get('foo', function () {
    echo 'Route with return callable<br>Hello printed, and World returned<br>';
    echo 'Hello';

    return ' World';
});

// Redirect Routes
Route::redirect('/here', '/there');

// Redirect Routes with http_responce_code
//Route::redirect('/here', '/there', 301);
