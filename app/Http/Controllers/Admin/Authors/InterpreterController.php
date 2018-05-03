<?php

namespace App\Http\Controllers\Admin\Authors;


use App\Http\Controllers\Controller;
use App\Model\Actual\BookNews;
use App\Model\Authors\Interpreter;
use App\Model\BookShop\Publishing;
use Illuminate\Http\Request;

class InterpreterController extends Controller
{

    public function index()
    {
        $interpreters = Interpreter::all();
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        return view('admin.authors.interpreters.index', compact(
            'interpreters',
            'bookNews',
            'publishings'
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

        $interpreter = Interpreter::add($request->all());
        $interpreter->uploadImage($request->file('image'));
        $interpreter->setBookNews($request->get('bookNews'));
        $interpreter->setPublishings($request->get('publishings'));
        $interpreter->toggleStatus($request->get('status'));
        return redirect()->route('interpreters.index');
    }

    public function edit($id)
    {
        $interpreter = Interpreter::findOrFail($id);
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        $selectedPublishings = $interpreter->publishings->pluck('id')->all();
        $selectedBookNews = $interpreter->bookNews->pluck('id')->all();
        return view('admin.authors.interpreters.edit', compact(
            'interpreter',
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
        $interpreter = Interpreter::findOrFail($id);
        $interpreter->edit($request->all());
        $interpreter->uploadImage($request->file('image'));
        $interpreter->setBookNews($request->get('bookNews'));
        $interpreter->setPublishings($request->get('publishings'));
        $interpreter->toggleStatus($request->get('status'));
        return redirect()->route('interpreters.index');
    }

    public function destroy($id)
    {
        Interpreter::findOrFail($id)->remove();
        return redirect()->route('interpreters.index');
    }

}