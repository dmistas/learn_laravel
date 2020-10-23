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

Route::get('/hello/{name}', function (string $name) {
    echo "Hello, $name!";
})->where('name', '\w+');

Route::get('/about', function () {
    echo "Мы студенты geekbrains, изучаем Laravel. Хотим работать backend разработчиками!";
});

Route::get('/news', function () {
    $data = ['news1' => 'Как зарабатывать на разработке мобильных приложений? Как запустить свой стартап?',
        'news2' => 'Уровень зарплат java-разработчика продолжает расти',
        'news3' => 'Блокчейн-разработка — новый курс GeekBrains'];
    return view('news', $data);
//    я пока не разобрался почему blade не видит если ему передавать массив $data
//    в виде return view('news', $data), возникает ошибка Undefined variable: data
});



