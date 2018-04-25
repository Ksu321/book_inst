<?php

namespace App\Http\Controllers\Page;

use App\BookNews;
use App\Http\Controllers\Controller;

class BookNewsController extends Controller
{
    public function index()
    {
        $bookNews =  BookNews::paginate(9)->where('status', 0);
        return view('pages.booknews.archive', compact('bookNews'));
    }

    public function showSingle($slug)
    {
        $aBookNews =  BookNews::where('slug', $slug)->firstOrFail();

        return view('pages.booknews.single', compact('aBookNews'));
    }
}