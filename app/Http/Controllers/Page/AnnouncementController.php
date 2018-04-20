<?php

namespace App\Http\Controllers\Page;

use App\Announcement;
use App\Http\Controllers\Controller;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements =  Announcement::paginate(9);
        return view('pages.announcements.archive', compact('announcements'));
    }

    public function showSingle($slug)
    {
        $announcement =  Announcement::where('slug', $slug)->firstOrFail();

        return view('pages.announcements.single', compact('announcement'));
    }
}