<?php


namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;


use App\Model\Catalog;
use Illuminate\Http\Request;

class CatalogController extends Controller
{
    public function index()
    {
        $catalogs = Catalog::all();
        return view('admin.catalogs.index', compact('catalogs'));
    }

    public function create()
    {
        return view('admin.catalogs.create');
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $catalog = Catalog::add($request->all());
        $catalog->uploadImage($request->file('image'));
        $catalog->uploadFile($request->file('file'));
        $catalog->toggleStatus($request->get('status'));
        return redirect()->route('catalogs.index');
    }

    public function edit($id)
    {
        $catalog = Catalog::findOrFail($id);
        return view('admin.catalogs.edit', compact('catalog'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'name' => 'required'
        ]);
        $catalog = Catalog::findOrFail($id);
        $catalog->edit($request->all());
        $catalog->uploadImage($request->file('image'));
        $catalog->uploadFile($request->file('file'));
        $catalog->toggleStatus($request->get('status'));
        return redirect()->route('catalogs.index');

    }

    public function destroy($id)
    {
        Catalog::findOrFail($id)->remove();
        return redirect()->route('catalogs.index');
    }
}