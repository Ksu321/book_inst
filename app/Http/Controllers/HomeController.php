<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Category;
use App\Partner;
use App\Tag;
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
        $announcements =  Announcement::paginate(6);
        $partners = Partner::all();
        return view('home', compact('announcements', 'partners'));
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
