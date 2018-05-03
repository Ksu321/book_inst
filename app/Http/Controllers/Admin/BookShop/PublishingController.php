<?php


namespace App\Http\Controllers\Admin\BookShop;

use App\Http\Controllers\Controller;
use App\Model\Actual\BookNews;
use App\Model\Authors\Author;
use App\Model\Authors\Illustrator;
use App\Model\Authors\Interpreter;
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
        $bookNews = BookNews::pluck('name_book', 'id')->all();
        $authors = Author::pluck('name', 'id')->all();
        $illustrators = Illustrator::pluck('name', 'id')->all();
        $interpreters = Interpreter::pluck('name', 'id')->all();
        return view('admin.bookshop.publishing.create', compact(
            'specializations',
            'bookNews',
            'authors',
            'illustrators',
            'interpreters'
            ));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
        ]);
        $publishing = Publishing::add($request->all());
        $publishing->uploadImage($request->file('image'));
        $publishing->setBookNews($request->get('bookNews'));
        $publishing->setAuthors($request->get('author'));
        $publishing->setIllustrators($request->get('illustrator'));
        $publishing->setInterpreters($request->get('interpreter'));
        $publishing->setSpecialization($request->get('specialization_id'));
        $publishing->toggleStatus($request->get('status'));
        return redirect()->route('publishing.index');
    }

    public function edit($id)
    {
        $publishing = Publishing::findOrFail($id);
        $specializations = Specialization::pluck('title', 'id')->all();
        $bookNews = BookNews::pluck('title', 'id')->all();
        $authors = Author::pluck('name', 'id')->all();
        $illustrators = Illustrator::pluck('name', 'id')->all();
        $interpreters = Interpreter::pluck('name', 'id')->all();
        $selectedBookNews = $publishing->bookNews->pluck('id')->all();
        $selectedAuthors = $publishing->authors->pluck('id')->all();
        $selectedIllustrators = $publishing->illustrators->pluck('id')->all();
        $selectedInterpreters = $publishing->interpreters->pluck('id')->all();
        return view('admin.bookshop.publishing.edit', compact(
            'publishing',
            'specializations',
            'bookNews',
            'authors',
            'illustrators',
            'interpreters',
            'selectedBookNews',
            'selectedAuthors',
            'selectedIllustrators',
            'selectedInterpreters'
            ));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, [
            'name' =>'required'
        ]);
        $publishing = Publishing::findOrFail($id);
        $publishing->edit($request->all());
        $publishing->setBookNews($request->get('bookNews'));
        $publishing->setAuthors($request->get('author'));
        $publishing->setIllustrators($request->get('illustrator'));
        $publishing->setInterpreters($request->get('interpreter'));
        $publishing->setSpecialization($request->get('specialization_id'));
        $publishing->uploadImage($request->file('image'));
        $publishing->toggleStatus($request->get('status'));
        return redirect()->route('publishing.index');
    }

    public function destroy($id)
    {
        Publishing::findOrFail($id)->remove();
        return redirect()->route('publishing.index');
    }
}