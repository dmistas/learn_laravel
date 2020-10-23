<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $categories = $this->getAllCategories();
//        dd($news);
        return view('news.index', ['categories' => $categories]);
    }

    public function showCategoryNews(int $category_id)
    {

//        echo "Это новость номер: $category_id";
        $newsFromCategory = $this->getCategoryNews($category_id);
        dd($newsFromCategory);
        return view('news.index', ['newsFromCategory' => $newsFromCategory]);
    }
    public function showNews(int $id)
    {
        $news = $this->getNews($id);
        dd($news);
        view('news.show', ['news'=>$news]);
    }

}
