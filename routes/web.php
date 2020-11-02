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

Route::group(['prefix' => 'admin'], function () {
    Route::resource('/news', \App\Http\Controllers\Admin\NewsController::class);
});

Route::get('/hello/{name}', function (string $name) {
    echo "Hello, $name!";
})->where('name', '\w+');

Route::get('/about', [\App\Http\Controllers\AboutController::class, 'index'])
    ->name('about');

Route::get('/news/{id}', [\App\Http\Controllers\NewsController::class, 'showNews'])
    ->where('id', '\d+')->name('news_id');


Route::get('/category/{id}', [\App\Http\Controllers\CategoryController::class, 'showCategoryNews'])
    ->where('id', '\d+')->name('category_id');
Route::get('/categories', [\App\Http\Controllers\CategoryController::class, 'index'])
    ->name('categories');

Route::resource('/orders', \App\Http\Controllers\OrdersController::class);

Route::view('/login', 'auth/login');

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

