<?php

namespace App\Http\Controllers\Admin;

use App\BookNews;
use App\Http\Controllers\Controller;
use App\Tag;
use Illuminate\Http\Request;

class BookNewsController extends Controller
{

    public function index()
    {
        $bookNews = BookNews::all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.booknews.index', compact(
            'bookNews',
            'tags'
        ));
    }

    public function create()
    {
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.booknews.create', compact(
            'tags'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'annotation' => 'required',
            'date' => 'required',
            'image' => 'required|image',
        ]);
        $aBookNews = BookNews::add($request->all());
        $aBookNews->uploadImage($request->file('image'));
        $aBookNews->setTags($request->get('tags'));
        $aBookNews->toggleStatus($request->get('status'));
        return redirect()->route('booknews.index');
    }

    public function edit($id)
    {

        $aBookNews = BookNews::findOrFail($id);
        $tags = Tag::pluck('title', 'id')->all();
        $selectedTags = $aBookNews->tags->pluck('id')->all();
        return view('admin.booknews.edit', compact(
            'aBookNews',
            'tags',
            'selectedTags',
            'categories'
        ));
    }


    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'title' => 'required',
            'description' => 'required',
            'annotation' => 'required',
            'date' => 'required',
        ]);

        $aBookNews = BookNews::findOrFail($id);
        $aBookNews->edit($request->all());
        $aBookNews->uploadImage($request->file('image'));
        $aBookNews->setTags($request->get('tags'));
        $aBookNews->toggleStatus($request->get('status'));
        return redirect()->route('booknews.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        BookNews::findOrFail($id)->remove();
        return redirect()->route('booknews.index');
    }
}