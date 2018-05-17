<?php


namespace App\Http\Controllers\Admin\Authors;


use App\Http\Controllers\Controller;
use App\Model\Actual\BookNews;
use App\Model\Authors\Author;
use App\Model\BookShop\Publishing;
use Illuminate\Http\Request;


class AuthorController extends Controller
{

    public function index()
    {
        $authors = Author::all();
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        return view('admin.authors.authors.index', compact(
            'authors',
            'bookNews',
            'publishings'
            ));
    }

    public function create()
    {
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        return view('admin.authors.authors.create', compact(
            'bookNews',
            'publishings'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $author = Author::add($request->all());
        $author->uploadImage($request->file('image'));
        $author->setBookNews($request->get('booksNews'));
        $author->setPublishings($request->get('publishing'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('authors.index');
    }

    public function edit($id)
    {
        $author = Author::findOrFail($id);
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        $selectedPublishings = $author->publishings->pluck('id')->all();
        $selectedBookNews = $author->bookNews->pluck('id')->all();
        return view('admin.authors.authors.edit', compact(
            'author',
            'bookNews',
            'publishings',
            'selectedPublishings',
            'selectedBookNews'
            ));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        $author = Author::findOrFail($id);
        $author->edit($request->all());
        $author->uploadImage($request->file('image'));
        $author->setBookNews($request->get('bookNews'));
        $author->setPublishings($request->get('publishings'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        Author::findOrFail($id)->remove();
        return redirect()->route('authors.index');
    }

}