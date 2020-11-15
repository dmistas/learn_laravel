<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = Category::orderBy('id', 'desc')->paginate(5);
        return view('categories.index', ['categories' => $categories]);
    }

    public function showCategoryNews(int $category_id)
    {
        $objCategory = new Category();
        $newsFromCategory = $objCategory->getCategoryNews($category_id);
        return view('categories.show', ['newsFromCategory' => $newsFromCategory]);
    }

    public function show(int $id)
    {

        $category = Category::find($id);
        if(!$category) {
            return abort(404);
        }
        $newsList = $category->news()->paginate(3);
        return view('categories.show', ['newsFromCategory' => $newsList]);
    }

}
