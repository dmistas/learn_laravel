<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    private $news = [
        [
            'id' => 1,
            'category_id' => 1,
            'slug' => 'one',
            'title' => 'Первая новость',
            'description' => 'Описание первой новости'
        ],
        [
            'id' => 2,
            'category_id' => 3,
            'slug' => 'two',
            'title' => 'Вторая новость',
            'description' => 'Описание второй новости'
        ],
        [
            'id' => 3,
            'category_id' => 1,
            'slug' => 'three',
            'title' => 'Третья новость',
            'description' => 'Описание третьей новости'
        ],
        [
            'id' => 4,
            'category_id' => 2,
            'slug' => 'four',
            'title' => 'Четвертая новость',
            'description' => 'Описание четвертой новости'
        ],
        [
            'id' => 5,
            'category_id' => 2,
            'slug' => 'five',
            'title' => 'Пятая новость',
            'description' => 'Описание пятой новости'
        ],
    ];

    private $category = [
        [
            'category_id' => 1,
            'slug' => 'sport',
            'title' => 'Спорт',
        ],
        [
            'category_id' => 2,
            'slug' => 'economy',
            'title' => 'Экономика',
        ],
        [
            'category_id' => 3,
            'slug' => 'culture',
            'title' => 'Культура',
        ],
        [
            'category_id' => 4,
            'slug' => 'technologies',
            'title' => 'Технолдогии',
        ],
    ];

    /**
     * @return array[]
     */
    public function getAllCategories(): array
    {
        return $this->category;
    }

    public function getCategoryNews($id): array
    {
        $arr_id = array_search($id, array_column($this->category, 'category_id'));

        return $this->category[$arr_id];
    }

    public function getAllNews(): array
    {
        return $this->news;
    }

    public function getNews($id): array
    {
        $arr_id = array_search($id, array_column($this->news, 'id'));
        return $this->news[$arr_id];
    }
}
