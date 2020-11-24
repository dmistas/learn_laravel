<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\News;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Orchestra\Parser\Xml\Facade as XmlParser;


class ParserController extends Controller
{
    public function index()
    {
        $load = XmlParser::load("https://news.yandex.ru/games.rss");
        $data = $load->parse([
            'title'=>[
                'uses'=>'channel.title'
            ],
            'link'=>[
                'uses'=>'channel.link'
            ],
            'description'=>[
                'uses'=>'channel.description'
            ],
            'image'=>[
                'uses'=>'channel.image'
            ],
            'news'=>[
                'uses'=>'channel.item[title,link,description]'
            ],

        ]);

        $data = $data['news'];
        foreach ($data as $key => $item){
            $data[$key]['slug'] = Str::slug($item['title']);
            $data[$key]['created_at'] = Carbon::now();
            $data[$key]['updated_at'] = Carbon::now();
        }
//        dd($data);
        $create = News::insert($data);
        if (!$create) {
            return back()->with('fail', 'Не удалось добавить новость');
        }
        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена');
    }
}
