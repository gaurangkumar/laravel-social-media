<?php

use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupMemberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\Auth\AdminLoginController;

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

require __DIR__.'/auth.php';

Route::get('/', array(HomeController::class, 'index'))
    ->name('home');
Route::get('/settings', array(HomeController::class, 'settings'))
    ->name('settings');

Route::post('/page/create', array(PageController::class, 'store'))
    ->name('page.store');
Route::get('/page/{page_uname}', array(PageController::class, 'show'))
    ->name('page.show');

Route::post('/post/{page_id}', array(HomeController::class, 'post_create'))
    ->name('post_create');

Route::post('/group/{group_id}', array(HomeController::class, 'group_chat'))
    ->name('group_chat');
Route::post('/group_members/{group_id}', array(GroupMemberController::class, 'group_members'))
    ->name('group_members');

Route::get('/call', array(HomeController::class, 'call'))
    ->name('call');
Route::get('/status', array(HomeController::class, 'status'))
    ->name('status');

Route::post('/profile', array(HomeController::class, 'profile'))
    ->name('profile');
Route::post('/delete-profile', array(HomeController::class, 'delete_profile'))
    ->name('delete-profile');
Route::post('/password', array(HomeController::class, 'password'))
    ->name('password');
Route::post('/social', array(HomeController::class, 'social'))
    ->name('social');

Route::resource('group', GroupController::class);
Route::resource('business', BusinessController::class);

Route::resource('product', ProductController::class);

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/', array(AdminHomeController::class, 'index'))->name('home');

    Route::resource('user', GroupController::class);
    Route::resource('group', GroupController::class);
    Route::resource('page', GroupController::class);
    Route::resource('business', GroupController::class);

    Route::get('login', array(AdminLoginController::class, 'index'))->name('login');
    Route::post('login', array(AdminLoginController::class, 'store'));
    Route::post('logout', array(AdminLoginController::class, 'destroy'))->name('logout');
});

Route::get('/{user_id}', array(HomeController::class, 'chat'))
    ->name('chat')
    ->where('id', '[0-9]+');
Route::post('/{user_id}', array(HomeController::class, 'sendchat'))
    ->name('sendchat')
    ->where('id', '[0-9]+');
