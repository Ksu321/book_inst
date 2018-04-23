<?php
/**
 * Created by PhpStorm.
 * User: itkron
 * Date: 23.04.18
 * Time: 12:09
 */

namespace App\Http\Controllers\Admin;

use App\Category;
use App\News;
use App\Http\Controllers\Controller;
use App\Tag;
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
//        $categories = Category::pluck('title', 'id')->all();
//        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.news.index', [
            'news' => $news,
//            'categories' => $categories,
//            'tags' => $tags,
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {

        return view('admin.news.create');
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
        $new = News::add($request->all());
        $new->uploadImage($request->file('image'));
//        $new->setCategory($request->get('category_id'));
//        $new->setTags($request->get('tags'));
        $new->toggleStatus($request->get('status'));
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
        $new = News::findOrFail($id);
//        $categories = Category::pluck('title', 'id')->all();
//        $tags = Tag::pluck('title', 'id')->all();
//        $selectedTags = $new->tags->pluck('id')->all();
        return view('admin.news.edit', compact(
            'new'));
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

        $new = News::findOrFail($id);
        $new->edit($request->all());
        $new->uploadImage($request->file('image'));
//        $new->setCategory($request->get('category_id'));
//        $new->setTags($request->get('tags'));
        $new->toggleStatus($request->get('status'));

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