<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        echo "<h3>Это агрегатор новостей </h3>";
        echo "Мы студенты geekbrains, изучаем Laravel. Хотим работать backend разработчиками!";
    }
}
