<?php


namespace App\Http\Controllers\Admin\BookShop;

use App\Http\Controllers\Controller;
use App\Model\BookShop\Publishing;
use App\Model\Specialization;
use Illuminate\Http\Request;


class PublishingController extends Controller
{
    public function index()
    {
        $publishings = Publishing::all();
        $specializations = Specialization::pluck('title', 'id')->all();
        return view('admin.bookshop.publishing.index', compact(
            'publishings',
            'specializations'
            ));
    }

    public function create()
    {
        $specializations = Specialization::pluck('title', 'id')->all();
        return view('admin.bookshop.publishing.create', compact('specializations'));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $author = Publishing::add($request->all());
        $author->uploadImage($request->file('image'));
        $author->setSpecialization($request->get('specialization_id'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('publishing.index');
    }

    public function edit($id)
    {
        $publish = Publishing::findOrFail($id);
        $specialization = Specialization::pluck('title', 'id')->all();
        return view('admin.bookshop.publishing.edit', compact(
            'publish',
            'specialization'
            ));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        $author = Publishing::findOrFail($id);
        $author->edit($request->all());
        $author->setSpecialization($request->get('specialization_id'));
        $author->uploadImage($request->file('image'));
        $author->toggleStatus($request->get('status'));
        return redirect()->route('publishing.index');
    }

}