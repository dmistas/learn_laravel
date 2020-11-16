<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\NewsStore;
use App\Http\Requests\NewsUpdate;
use App\Models\Category;
use App\Models\News;
use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;
use function React\Promise\all;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    private function availableCategories(){
        return Category::all();
    }

    public function index()
    {
        $news = News::orderBy('id', 'desc')->paginate(10);
        return view('admin.news.index', ['news' => $news]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $availableCategories = $this->availableCategories();
        return view('admin.news.create', ['categories' => $availableCategories]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(NewsStore $request)
    {
        $data = $request->only('title', 'author', 'description');
        $data['slug'] = Str::slug($data['title']);
        $create = News::create($data);
//        TODO add inserting to category_has_news
        if (!$create) {
            return back()->with('fail', 'Не удалось добавить новость');
        }
        return redirect()->route('news.index')->with('success', 'Новость успешно добавлена');
    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function show(News $news)
    {
        echo "in the show method";
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function edit(News $news)
    {
        $availableCategories = $this->availableCategories();
        return view('admin.news.edit', ['news' => $news, 'categories'=>$availableCategories]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function update(NewsUpdate $request, News $news)
    {
        $data = $request->only(['title', 'author', 'description']);
        $data['slug'] = Str::slug($data['title']);
        $news->fill($data);
        if ($news->save()) {
            return redirect()->route('news.index');
        }
        return back()->with('fail', 'Не удалось сохранить новость');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\News $news
     * @return \Illuminate\Http\Response
     */
    public function destroy(News $news)
    {
        $news->delete();
        return redirect()->route('news.index');
    }


}
