<?php

namespace App\Http\Controllers\Admin\Authors;


use App\Http\Controllers\Controller;

use App\Model\Authors\Illustrator;
use Illuminate\Http\Request;


class IllustratorController extends Controller
{

    public function index()
    {
        $illustrators = Illustrator::all();
        return view('admin.authors.illustrators.index', compact('illustrators'));
    }

    public function create()
    {
            return view('admin.authors.illustrators.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $author = Illustrator::add($request->all());
        $author->uploadImage($request->file('image'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('authors.index');
    }

    public function edit($id)
    {
        $author = Illustrator::findOrFail($id);
        return view('admin.authors.illustrators.edit', compact('author'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        $author = Illustrator::findOrFail($id);
        $author->edit($request->all());
        $author->uploadImage($request->file('image'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('authors.index');
    }

    public function destroy($id)
    {
        Illustrator::findOrFail($id)->remove();
        return redirect()->route('authors.index');
    }

}