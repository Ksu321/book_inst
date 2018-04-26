<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;

use App\Model\Authors\Illustrator;
use Illuminate\Http\Request;


class IllustratorController extends Controller
{

    public function index()
    {
        $illustrators = Illustrator::all();
        return view('admin.illustrators.index', compact('illustrators'));
    }

    public function create()
    {
        $publish = 12;
            return view('admin.illustrators.create', compact('publish'));
    }

    public function store(Request $request)
    {

    }

}