<?php

namespace App\Http\Controllers;

use App\Models\News;
use Illuminate\Http\Request;
use phpDocumentor\Reflection\Types\Integer;

class NewsController extends Controller
{
    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(3);
        return view('news.index', ['news' => $news]);
    }

    public function showNewsBySlug(string $slug)
    {
        $news = News::where('slug', $slug)->first();
        return view('news.show', ['news'=>$news]);
    }

    public function showNewsByID(int $id)
    {
        $news = News::find($id);
        return view('news.show', ['news'=>$news]);
    }

}
