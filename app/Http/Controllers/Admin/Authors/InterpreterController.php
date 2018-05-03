<?php

namespace App\Http\Controllers\Admin\Authors;


use App\Http\Controllers\Controller;
use App\Model\Authors\Interpreter;

class InterpreterController extends Controller
{

    public function index()
    {
        $interpreters = Interpreter::all();
//        $bookNews = BookNews::pluck('name_book', 'id')->all();
//        $publishings = Publishing::pluck('name', 'id')->all();
        return view('admin.authors.interpreters.index', compact(
            'interpreters'
            ));
    }

    public function create()
    {
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        return view('admin.authors.interpreters.create', compact(
            'bookNews',
            'publishings'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);

        $illustrator = Illustrator::add($request->all());
        $illustrator->uploadImage($request->file('image'));
        $illustrator->setBookNews($request->get('bookNews'));
        $illustrator->setPublishings($request->get('publishings'));
        $illustrator->toggleStatus($request->get('status'));
        return redirect()->route('interpreters.index');
    }

    public function edit($id)
    {
        $illustrator = Illustrator::findOrFail($id);
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        $selectedPublishings = $illustrator->publishings->pluck('id')->all();
        $selectedBookNews = $illustrator->bookNews->pluck('id')->all();
        return view('admin.authors.interpreters.edit', compact(
            'illustrator',
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
        $illustrator = Illustrator::findOrFail($id);
        $illustrator->edit($request->all());
        $illustrator->uploadImage($request->file('image'));
        $illustrator->setBookNews($request->get('bookNews'));
        $illustrator->setPublishings($request->get('publishings'));
        $illustrator->toggleStatus($request->get('status'));
        return redirect()->route('interpreters.index');
    }

    public function destroy($id)
    {
        Illustrator::findOrFail($id)->remove();
        return redirect()->route('interpreters.index');
    }


}