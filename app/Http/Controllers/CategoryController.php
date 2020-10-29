<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = $this->getAllCategories();
        return view('categories.index', ['categories' => $categories]);
    }

    public function showCategoryNews(int $category_id)
    {
        $newsFromCategory = array();
        foreach ($this->getAllNews() as $news) {
            if ($news['category_id'] == $category_id) {
                $newsFromCategory[] = $news;
            }
        }
        return view('categories.show', ['newsFromCategory' => $newsFromCategory]);
    }
}
