<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        //return all news
        echo "Админ: список всех новостей";
    }

    public function create()
    {
        echo "Создаем новость";
    }

    public function edit(int $id)
    {
        echo "Редактирование новости $id";
    }

    public function delete(int $id)
    {
        echo "Удаление новости $id";
    }
}
