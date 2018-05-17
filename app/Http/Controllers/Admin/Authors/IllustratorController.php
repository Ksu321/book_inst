<?php

namespace App\Http\Controllers\Admin\Authors;


use App\Http\Controllers\Controller;
use App\Model\Actual\BookNews;
use App\Model\Authors\Illustrator;
use App\Model\BookShop\Publishing;
use Illuminate\Http\Request;


class IllustratorController extends Controller
{

    public function index()
    {
        $illustrators = Illustrator::all();
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        return view('admin.authors.illustrators.index', compact(
            'illustrators',
            'bookNews',
            'publishings'
        ));
    }

    public function create()
    {
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        return view('admin.authors.illustrators.create', compact(
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
        return redirect()->route('illustrators.index');
    }

    public function edit($id)
    {
        $illustrator = Illustrator::findOrFail($id);
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $publishings = Publishing::pluck('name', 'id')->all();
        $selectedPublishings = $illustrator->publishings->pluck('id')->all();
        $selectedBookNews = $illustrator->bookNews->pluck('id')->all();
        return view('admin.authors.illustrators.edit', compact(
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
        return redirect()->route('illustrators.index');
    }

    public function destroy($id)
    {
        Illustrator::findOrFail($id)->remove();
        return redirect()->route('illustrators.index');
    }

}