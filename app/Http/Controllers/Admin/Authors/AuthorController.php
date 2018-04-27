<?php


namespace App\Http\Controllers\Admin\Authors;


use App\Http\Controllers\Controller;
use App\Model\Authors\Author;
use Illuminate\Http\Request;


class AuthorController extends Controller
{

    public function index()
    {
        $authors =Author::all();
        return view('admin.authors.index', compact('authors'));
    }

    public function create()
    {
        return view('admin.authors.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $author = Author::add($request->all());
        $author->uploadImage($request->file('image'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('authors.index');
    }

    public function edit($id)
    {
        $author = Author::findOrFail($id);
        return view('admin.authors.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        $author = Author::findOrFail($id);
        $author->edit($request->all());
        $author->uploadImage($request->file('image'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        Author::findOrFail($id)->remove();
        return redirect()->route('authors.index');
    }
}