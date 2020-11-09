<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class NewsController extends Controller
{
    public function index()
    {
        $objNews = new News();
        $news = $objNews->getAllNews();
//        dd($news);
        return view('news.index', ['news' => $news]);
    }

    public function showNews(int $id)
    {
        $news = $this->getNews($id);
        return view('news.show', ['news' => $news]);
    }

    public function showNewsBySlug(string $slug)
    {
        $objNews = new News();
        $news = $objNews->getNewsBySlug($slug);
        return view('news.show', ['news'=>$news]);
    }

    public function showNewsByID(int $id)
    {
        $objNews = new News();
        $news = $objNews->getNewsByID($id);
        return view('news.show', ['news'=>$news]);
    }

}
