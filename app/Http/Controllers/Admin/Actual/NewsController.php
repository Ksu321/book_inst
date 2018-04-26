<?php

namespace App\Http\Controllers\Admin\Actual;

use App\Model\Actual\News;
use App\Http\Controllers\Controller;

use App\Model\Category;
use App\Model\Tag;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $news = News::all();
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.news.index', compact(
            'news',
            'tags',
            'categories'
        ));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.news.create', compact(
            'tags',
            'categories'
            ));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'description' => 'required',
            'content' => 'required',
            'date' => 'required',
            'city' => 'required',
            'image' => 'required|image',
        ]);
        $aNews = News::add($request->all());
        $aNews->uploadImage($request->file('image'));
        $aNews->setCategory($request->get('category_id'));
        $aNews->setTags($request->get('tags'));
        $aNews->toggleStatus($request->get('status'));
        return redirect()->route('news.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $aNews = News::findOrFail($id);
        $categories = Category::pluck('title', 'id')->all();
        $tags = Tag::pluck('title', 'id')->all();
        $selectedTags = $aNews->tags->pluck('id')->all();
        return view('admin.news.edit', compact(
            'aNews',
            'tags',
            'selectedTags',
            'categories'
            ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' =>'required',
            'content'   =>  'required',
            'date'  =>  'required',
            'city' => 'required',
            'image' =>  'nullable|image'
        ]);

        $aNews = News::findOrFail($id);
        $aNews->edit($request->all());
        $aNews->uploadImage($request->file('image'));
        $aNews->setCategory($request->get('category_id'));
        $aNews->setTags($request->get('tags'));
        $aNews->toggleStatus($request->get('status'));

        return redirect()->route('news.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        News::findOrFail($id)->remove();
        return redirect()->route('news.index');
    }

}