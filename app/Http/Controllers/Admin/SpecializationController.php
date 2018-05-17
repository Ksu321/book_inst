<?php

namespace App\Http\Controllers\Admin;


use App\Http\Controllers\Controller;
use App\Model\Specialization;
use Illuminate\Http\Request;

class SpecializationController extends Controller
{

    public function index()
    {
        $specializations = Specialization::all();
        return view('admin.specializations.index', compact('specializations'));
    }

    public function create()
    {
        return view('admin.specializations.create');
    }

    public function store(Request $request)
    {
        $this->validate($request, ['title' => 'required']);
        Specialization::create($request->all());
        return redirect()->route('specializations.index');
    }

    public function edit($id)
    {
        $specialization = Specialization::find($id);
        return view('admin.specializations.edit', compact('specialization'));
    }

    public function update(Request $request, $id)
    {
        $this->validate($request, ['title' => 'required']);
        $specialization = Specialization::find($id);
        $specialization->update($request->all());
        return redirect()->route('specializations.index');
    }

    public function destroy($id)
    {
        Specialization::find($id)->delete();
        return redirect()->route('specializations.index');
    }
}