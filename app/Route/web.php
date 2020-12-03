<?php
/**
 *
 * @auther GaurangKumar Parmar <gaurangkumarp@gmail.com>
 *
 */
use Friday\Http\Route;

/*
 *
 *--------------------------------------------------------------------------
 * Web Routes
 *--------------------------------------------------------------------------
 * Here is where you can register web routes for your application. Now
 * create something great!
 *
 */

Route::get('/')
    ->name('home');

Route::get('/diwali/wish/{?id}', 'DiwaliController@index')
    ->name('wish');

Route::post('/', 'IndexController@store')
    ->name('query');

// Route::get('/codework', 'Codework/HomeController')->name('codework');

