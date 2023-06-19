<?php

use App\Http\Controllers\Admin\BusinessController as AdminBusinessController;
use App\Http\Controllers\Admin\GroupController as AdminGroupController;
use App\Http\Controllers\Admin\HomeController as AdminHomeController;
use App\Http\Controllers\Admin\LoginController as AdminLoginController;
use App\Http\Controllers\Admin\PageController   as AdminPageController;
use App\Http\Controllers\Admin\UserController as AdminUserController;
use App\Http\Controllers\BusinessController;
use App\Http\Controllers\GroupController;
use App\Http\Controllers\GroupMemberController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
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

    Route::get('/', [HomeController::class, 'index'])
        ->name('home');
    Route::get('/settings', [HomeController::class, 'settings'])
        ->name('settings');

    Route::post('/page/create', [PageController::class, 'store'])
        ->name('page.store');
    Route::get('/page/{page:uname}', [PageController::class, 'show'])
        ->name('page.show');

    Route::post('/post/{page_id}', [HomeController::class, 'post_create'])
        ->name('post_create');

    Route::post('/group_members/{group:id}', [GroupMemberController::class, 'group_members'])
        ->name('group_members');

    Route::get('/call', [HomeController::class, 'call'])
        ->name('call');
    Route::get('/status', [HomeController::class, 'status'])
        ->name('status');

    Route::post('/profile', [HomeController::class, 'profile'])
        ->name('profile');
    Route::post('/delete-profile', [HomeController::class, 'delete_profile'])
        ->name('delete-profile');
    Route::post('/password', [HomeController::class, 'password'])
        ->name('password');
    Route::post('/social', [HomeController::class, 'social'])
        ->name('social');

    Route::resource('group', GroupController::class);
    Route::resource('business', BusinessController::class);
    Route::resource('product', ProductController::class);

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/', [AdminHomeController::class, 'index'])->name('home');

        /*
        Route::delete('/user/{user:id}/profile/delete', array(AdminUserController::class, 'profile_delete'))
            ->name('user.profile.delete');
        Route::put('/user/{user:id}/profile/update', array(AdminUserController::class, 'profile_update'))
            ->name('user.profile.update');
        */

        Route::delete('/group/{group:id}/profile/delete', [AdminGroupController::class, 'profile_delete'])
            ->name('group.profile.delete');
        Route::put('/group/{group:id}/profile/update', [AdminGroupController::class, 'profile_update'])
            ->name('group.profile.update');

        Route::delete('/page/{page:id}/profile/delete', [AdminPageController::class, 'profile_delete'])
            ->name('page.profile.delete');
        Route::put('/page/{page:id}/profile/update', [AdminPageController::class, 'profile_update'])
            ->name('page.profile.update');

        /*
        Route::get('/user', array(AdminUserController::class, 'index'))->name('user');
        Route::get('/user/{user_id}', array(AdminUserController::class, 'show'))->name('user.show');
        Route::get('/user/{user_id}/edit', array(AdminUserController::class, 'edit'))->name('user.edit');
        */
        Route::get('/user/{user:id}/delete', [AdminUserController::class, 'delete'])->name('user.delete');

        Route::resource('user', AdminUserController::class);
        Route::resource('group', AdminGroupController::class);
        Route::resource('page', AdminPageController::class);

        Route::get('/business', [AdminBusinessController::class, 'index'])->name('business');
        Route::get('/business/{business_id}', [AdminBusinessController::class, 'show'])->name('business.show');

        Route::get('/login', [AdminLoginController::class, 'index'])->name('login');
        Route::post('/login', [AdminLoginController::class, 'store'])->name('login.store');
        Route::get('/logout', [AdminLoginController::class, 'logout'])->name('logout');
    });

    Route::post('/group/chat/{group:id}', [HomeController::class, 'groupchat'])
        ->name('groupchat')
        ->where('id', '[0-9]+');

    Route::get('/{sender:id}', [HomeController::class, 'chat'])
        ->name('chat')
        ->where('id', '[0-9]+');

    Route::post('/{sender:id}', [HomeController::class, 'sendchat'])
        ->name('sendchat')
        ->where('id', '[0-9]+');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';
