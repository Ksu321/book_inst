<?php

namespace App\Http\Controllers;

use App\Announcement;
use App\Partner;
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
}
