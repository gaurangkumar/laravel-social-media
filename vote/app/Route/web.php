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

Route::get('/', 'VoteController@index')
    ->name('home');

Route::post('/vote', 'VoteController@vote')
    ->name('vote');

Route::get('/diwali/wish/{?id}', 'DiwaliController@index')
    ->name('wish');

Route::post('/', 'IndexController@store')
    ->name('query');

Route::get('/track', 'IpController@track')
    ->name('track');

Route::prefix('admin')->group(function () {
    Route::get('/',                 'Admin\HomeController@index')
        ->name('admin');
    Route::get('/setting',          'Admin\HomeController@setting')
        ->name('setting');

    Route::post('/password',        'Admin\LoginController@password')
        ->name('password');
    Route::post('/email',           'Admin\LoginController@email')
        ->name('email');
    Route::get('/login',            'Admin\LoginController@index')
        ->name('loginForm');
    Route::post('/login',           'Admin\LoginController@login')
        ->name('login');
    Route::get('/logout',          'Admin\LoginController@logout')
        ->name('logout');

    Route::resource('/product',     'Admin\ProductController');
    Route::resource('/slide',       'Admin\SlideController');
    Route::resource('/category',    'Admin\CategoryController');
    Route::resource('/quotation',   'Admin\QuotationController');

    Route::resource('/client',      'Admin\ClientController');
    Route::resource('/testimonial', 'Admin\TestimonialController');
    Route::resource('/inquiry',     'Admin\InquiryController');
    Route::resource('/image',       'Admin\ImageController');
    Route::resource('/certy',       'Admin\CertyController');
    Route::resource('/premix',      'Admin\PremixController');
    Route::resource('/industry',    'Admin\IndustryController');
});

// Route::get('/codework', 'Codework/HomeController')->name('codework');

Route::get('/404', function () {
    echo '404 Page not found.';
});

