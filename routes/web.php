<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/user', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(array('auth'))->name('dashboard');

require __DIR__.'/auth.php';

Route::get('/', array(HomeController::class, 'index'))->name('home');
Route::get('/settings', array(HomeController::class, 'settings'))->name('settings');
Route::get('/page/{page_uname}', array(HomeController::class, 'page'))->name('page');
Route::post('/page/create', array(HomeController::class, 'page_create'))->name('page_create');
Route::get('/call', array(HomeController::class, 'call'))->name('call');
Route::get('/status', array(HomeController::class, 'status'))->name('status');
Route::post('/profile', array(HomeController::class, 'profile'))->name('profile');
Route::post('/delete-profile', array(HomeController::class, 'delete_profile'))->name('delete-profile');
Route::post('/password', array(HomeController::class, 'password'))->name('password');
Route::post('/social', array(HomeController::class, 'social'))->name('social');

Route::get('/{user_id}', array(HomeController::class, 'chat'))->name('chat');
Route::post('/{user_id}', array(HomeController::class, 'sendchat'))->name('sendchat');
