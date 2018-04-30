<?php


namespace App\Http\Controllers\Admin\BookShop;

use App\Http\Controllers\Controller;
use App\Model\BookShop\Publishing;
use Illuminate\Http\Request;


class PublishingController extends Controller
{
    public function index()
    {
        $publishings = Publishing::all();
        return view('admin.bookshop.publishing.index', compact('publishings'));
    }

    public function create()
    {
        return view('admin.bookshop.publishing.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $author = Publishing::add($request->all());
        $author->uploadImage($request->file('image'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('publishing.index');
    }

    public function edit($id)
    {
        $publish = Publishing::findOrFail($id);
        return view('admin.bookshop.publishing.edit', compact('publish'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        $author = Publishing::findOrFail($id);
        $author->edit($request->all());
        $author->uploadImage($request->file('image'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('publishing.index');
    }

}