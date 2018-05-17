<?php


namespace App\Http\Controllers\Admin\BookShop;


use App\Http\Controllers\Controller;
use App\Model\BookShop\Statistic;
use App\Model\Tag;
use Illuminate\Http\Request;

class StatisticController extends Controller
{
    public function index()
    {
        $statistics = Statistic::all();
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.bookshops.statistics.index', compact(
            'statistics',
            'tags'
        ));
    }

    public function create()
    {
        $tags = Tag::pluck('title', 'id')->all();
        return view('admin.bookshops.statistics.create', compact(
            'tags'
        ));
    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'file' => 'file',
            'image' => 'required|image',
        ]);
        $statistic = Statistic::add($request->all());
        $statistic->uploadImage($request->file('image'));
        $statistic->uploadFile($request->file('file'));
        $statistic->setTags($request->get('tags'));
        $statistic->toggleStatus($request->get('status'));
        return redirect()->route('statistics.index');
    }

    public function edit($id)
    {
        $statistic = Statistic::findOrFail($id);
        $tags = Tag::pluck('title', 'id')->all();
        $selectedTags = $statistic->tags->pluck('id')->all();
        return view('admin.actual.statistics.edit', compact(
            'tags',
            'statistic',
            'selectedTags'
        ));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request,[
            'title' => 'required',
            'content' => 'required',
            'date' => 'required',
            'file' => 'file',
            'image' => 'required|image',
        ]);
        $statistic = Statistic::findOrFail($id);
        $statistic->edit($request->all());
        $statistic->uploadImage($request->file('image'));
        $statistic->uploadFile($request->file('file'));
        $statistic->setTags($request->get('tags'));
        $statistic->toggleStatus($request->get('status'));

        return redirect()->route('statistics.index');
    }


    public function destroy($id)
    {
        Statistic::findOrFail($id)->remove();
        return redirect()->route('statistics.index');
    }
}