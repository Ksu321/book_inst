<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Partner;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class PartnerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $partners = Partner::all();
        return view('admin.partners.index', compact('partners'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.partners.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $this->validate($request,[
            'name' => 'required',
            'link' => 'required|url|unique:partners',
            'image' => 'required|image',
        ]);
        $partner = Partner::add($request->all());
        $partner->uploadImage($request->file('image'));
        $partner->toggleStatus($request->get('status'));
        return redirect()->route('partners.index');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $partner = Partner::findOrFail($id);
        return view('admin.partners.edit', compact('partner'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $partner = Partner::findOrFail($id);
        $this->validate($request,[
            'name' => 'required',
            'link' => [
                'required',
                'url',
                Rule::unique('partners')->ignore($partner->id),
            ],
            'image' => 'nullable|image',
        ]);
        $partner->edit($request->all());
        $partner->uploadImage($request->file('image'));
        $partner->toggleStatus($request->get('status'));
        return redirect()->route('partners.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Partner  $partner
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Partner::findOrFail($id)->remove();
        return redirect()->route('partners.index');
    }
}
