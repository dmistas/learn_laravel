<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function index()
    {
        $categories = $this->getAllCategories();
        return view('news.index', ['categories' => $categories]);
    }

    public function showCategoryNews(int $category_id)
    {
        $newsFromCategory = array();
        foreach ($this->getAllNews() as $news){
            if ($news['category_id']==$category_id){
                $newsFromCategory[]=$news;
            }
        }
        return view('news.index', ['newsFromCategory' => $newsFromCategory]);
    }
    public function showNews(int $id)
    {
        $news = $this->getNews($id);
        return view('news.show', ['news'=>$news]);
    }

}
