<?php

namespace App\Http\Controllers;

use App\Models\PopularTitleSection;
use Illuminate\Http\Request;

class PopularTitleSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $popularTitles = PopularTitleSection::all();
        return view('pages.back-home', compact('popularTitles'));
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
     * @param  \App\Models\PopmularTitleSection  $polularTitleSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = PopularTitleSection::find($id);
        return view('partials.popularTitleSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopularTitleSection  $polularTitleSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = PopularTitleSection::find($id);
        return view('partials.popularTitleSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopularTitleSection  $polularTitleSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = PopularTitleSection::find($id);
        $update->titre = $request->titre;
        $update->sous_titre = $request->sous_titre;
        $update->save();

        return redirect('/back-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopularTitleSection  $polularTitleSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = PopularTitleSection::find($id);
        $destroy->delete();

        return redirect('/back-home');
    }
}
