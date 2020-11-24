<?php

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

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'auth'], function () {

    Route::group(['prefix' => 'account'], function () {
        Route::get('/', [\App\Http\Controllers\Account\IndexController::class, 'index'])
            ->name('account');
    });

    Route::group(['prefix' => 'admin', 'middleware' => 'admin'], function () {
        Route::get('/', [\App\Http\Controllers\Admin\IndexController::class, 'index']);
        Route::get('/users', [\App\Http\Controllers\Admin\UserController::class, 'index'])
            ->name('admin_all_users');
        Route::get('/parser', [\App\Http\Controllers\Admin\ParserController::class, 'index'])
            ->name('parser');

        Route::get('/users/delete/{id}', [\App\Http\Controllers\Admin\UserController::class, 'deleteUser'])
            ->where('id', '\d+')->name('delete_user');
        Route::get('/users/{id}', [\App\Http\Controllers\Admin\UserController::class, 'changeRole'])
            ->where('id', '\d+')->name('change_user_role');
        Route::resource('/news', \App\Http\Controllers\Admin\NewsController::class);
    });
});

Route::group(['middleware' => 'guest'], function () {
    Route::get('login/vk', [\App\Http\Controllers\SocialAuth\VkSocialiteController::class, 'redirectToProvider'])
        ->name('vk.login');
    Route::get('login/vk/callback',
        [\App\Http\Controllers\SocialAuth\VkSocialiteController::class,
        'handleProviderCallback'])
        ->name('vk.login.callback');
    Route::get('login/fb', [\App\Http\Controllers\SocialAuth\FbSocialiteController::class, 'redirectToProvider'])
        ->name('fb.login');
    Route::get('login/fb/callback',
        [\App\Http\Controllers\SocialAuth\FbSocialiteController::class,
            'handleProviderCallback'])
        ->name('fb.login.callback');

});

Route::get('/hello/{name}', function (string $name) {
    echo "Hello, $name!";
})->where('name', '\w+');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])
    ->name('about');

Route::get('/news', [\App\Http\Controllers\NewsController::class, 'index'])
    ->name('all_news');
Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'showNewsByID'])
    ->where('id', '\d+')->name('news_id');
Route::get('/news/{slug}', [\App\Http\Controllers\NewsController::class, 'showNewsBySlug'])
    ->name('news_slug');
Route::get('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'show'])
    ->where('id', '\d+')->name('category_id');
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('categories');
Route::resource('/orders', \App\Http\Controllers\OrdersController::class);


Route::view('/login', 'auth/login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');



