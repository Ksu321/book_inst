<?php

namespace App\Http\Controllers\Admin\Actual;


use App\Http\Controllers\Controller;
use App\Model\Actual\BookNews;
use App\Model\Authors\Author;
use App\Model\Authors\Illustrator;
use App\Model\Authors\Interpreter;
use App\Model\BookShop\Publishing;
use App\Model\Tag;
use Illuminate\Http\Request;

class BookNewsController extends Controller
{

    public function index()
    {
        $bookNews = BookNews::all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.actual.booknews.index', compact(
            'bookNews',
            'tags'
        ));
    }

    public function create()
    {
        $tags = Tag::pluck('title', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        $authors = Author::pluck('name', 'id')->all();
        $illustrators = Illustrator::pluck('name', 'id')->all();
        $interpreters = Interpreter::pluck('name', 'id')->all();
        return view('admin.actual.booknews.create', compact(
            'tags',
            'authors',
            'publishings',
            'illustrators',
            'interpreters'
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
        $aBookNews->setPublishings($request->get('publishing'));
        $aBookNews->setAuthors($request->get('author'));
        $aBookNews->setIllustrators($request->get('illustrator'));
        $aBookNews->setInterpreters($request->get('interpreter'));
        $aBookNews->setTags($request->get('tags'));
        $aBookNews->toggleStatus($request->get('status'));
        return redirect()->route('booknews.index');
    }

    public function edit($id)
    {
        $aBookNews = BookNews::findOrFail($id);
        $tags = Tag::pluck('title', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        $authors = Author::pluck('name', 'id')->all();
        $illustrators = Illustrator::pluck('name', 'id')->all();
        $interpreters = Interpreter::pluck('name', 'id')->all();
        $selectedTags = $aBookNews->tags->pluck('id')->all();
        $selectedPublishings = $aBookNews->publishings->pluck('id')->all();
        $selectedAuthors = $aBookNews->authors->pluck('id')->all();
        $selectedIllustrators = $aBookNews->illustrators->pluck('id')->all();
        $selectedInterpreters = $aBookNews->interpreters->pluck('id')->all();
        return view('admin.actual.booknews.edit', compact(
            'aBookNews',
            'tags',
            'publishings',
            'authors',
            'illustrators',
            'interpreters',
            'selectedPublishings',
            'selectedAuthors',
            'selectedIllustrators',
            'selectedInterpreters',
            'selectedTags'
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
        $aBookNews->setPublishings($request->get('publishing'));
        $aBookNews->setAuthors($request->get('author'));
        $aBookNews->setIllustrators($request->get('illustrator'));
        $aBookNews->setInterpreters($request->get('interpreter'));
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