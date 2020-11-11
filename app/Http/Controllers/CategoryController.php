<?php

namespace App\Http\Controllers;

use App\Models\Category;

class CategoryController extends Controller
{
    public function index()
    {
        $objCategory = new Category();
        $categories = $objCategory->getAllCategories();
        return view('categories.index', ['categories' => $categories]);
    }

    public function showCategoryNews(int $category_id)
    {
        $objCategory = new Category();
        $newsFromCategory = $objCategory->getCategoryNews($category_id);
        return view('categories.show', ['newsFromCategory' => $newsFromCategory]);
    }
}
