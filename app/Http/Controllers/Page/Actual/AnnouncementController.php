<?php

namespace App\Http\Controllers\Page;


use App\Http\Controllers\Controller;
use App\Model\Actual\Announcement;

class AnnouncementController extends Controller
{
    public function index()
    {
        $announcements =  Announcement::where('status', 0)->paginate(9);
        return view('pages.announcements.archive', compact('announcements'));
    }

    public function showSingle($slug)
    {
        $announcement =  Announcement::where('slug', $slug)->firstOrFail();

        return view('pages.announcements.single', compact('announcement'));
    }
}