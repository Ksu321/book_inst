<?php

namespace App\Http\Controllers\Page;


use App\Http\Controllers\Controller;
use App\Model\Actual\News;


class NewsController extends Controller
{
    public function index()
    {
        $news =  News::paginate(9)->where('status', 0);
        return view('pages.news.archive', compact('news'));
    }

    public function showSingle($slug)
    {
        $aNews =  News::where('slug', $slug)->firstOrFail();

        return view('pages.news.single', compact('aNews'));
    }
}