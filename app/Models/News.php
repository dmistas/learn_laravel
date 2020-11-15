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
      'title', 'author', 'description', 'slug',
    ];

    protected $casts = [
        'published'=> 'boolean'
    ];


    public function getNewsBySlug(string $slug)
    {
        return DB::table($this->table)->where(['slug'=>$slug])->first();
    }

    public function getNewsByID(int $id)
    {
        return DB::table($this->table)->find($id);
    }
}
