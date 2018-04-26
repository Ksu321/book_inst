<?php

namespace App\Http\Controllers;


use App\Model\Actual\Announcement;
use App\Model\Actual\BookNews;
use App\Model\Actual\News;
use App\Model\Category;
use App\Model\Partner;
use App\Model\Tag;
use Illuminate\Http\Request;

class HomeController extends Controller
{

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $announcements =  Announcement::paginate(6)->where('status', 0);
        $partners = Partner::all();
        $news = News::paginate(9)->where('status', 0);
        $bookNews = BookNews::paginate(4)->where('status', 0);
        return view('home', compact('announcements', 'partners', 'news', 'bookNews'));
    }

    public function showTag($slug)
    {
        $tag = Tag::where('slug', $slug)->firstOrFail();
        $announcements = $tag->announcements()->paginate(6);
        return view('pages.list', compact('announcements'));
    }

    public function showCategory($slug)
    {
        $category = Category::where('slug', $slug)->firstOrFail();
        $announcements = $category->announcements()->paginate(6);
        return view('pages.list', compact('announcements'));
    }
}
