<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{

    public function showNews(int $id)
    {
        $news = $this->getNews($id);
        return view('news.show', ['news'=>$news]);
    }

}
