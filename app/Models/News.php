<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class News extends Model
{
    use HasFactory;

    protected $table="news";

    protected $fillable =[
      'title', 'author', 'description', 'slug', 'link', 'image',
    ];

    protected $casts = [
        'published'=> 'boolean'
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'categories_has_news', 'news_id',
            'category_id');
    }

}
