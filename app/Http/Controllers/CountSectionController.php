<?php

namespace App\Http\Controllers;

use App\Models\CountSection;
use Illuminate\Http\Request;

class CountSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $counts = CountSection::all();
        return view('pages.back-home', compact('counts'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\CountSection  $countSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = CountSection::find($id);
        return view('partials.countSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\CountSection  $countSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = CountSection::find($id);
        return view('partials.countSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\CountSection  $countSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'number' => ['required', 'integer'],
            'desp' => ['required', 'max:255'],
        ]);

        $update = CountSection::find($id);
        $update->number = $request->number;
        $update->desp = $request->desp;
        $update->save();

        return redirect('/countSection/' .$update->id)->with('warning', "Modification du count: $update->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\CountSection  $countSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = CountSection::find($id);
        $destroy->delete();

        return redirect('/back-home')->with('danger', "Supprétion du count: $destroy->id");
    }
}
