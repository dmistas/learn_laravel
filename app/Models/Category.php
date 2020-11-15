<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Category extends Model
{
    use HasFactory;

    protected $table = "categories";

    public function news(){
        return $this->belongsToMany(News::class, 'categories_has_news', 'category_id',
            'news_id');
    }

//    public function getAllCategories()
//    {
//        return DB::table($this->table)->get();
//    }
//
//    public function getCategoryNews(int $id)
//    {
//        $newsFromCategory = DB::table('categories_has_news')
//            ->join('news', 'categories_has_news.news_id', '=', 'news.id')
//            ->select('news.*')
//            ->where('category_id', $id)
//            ->get();
//
//        return $newsFromCategory;
//    }
}
