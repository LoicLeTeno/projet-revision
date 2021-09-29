<?php

namespace App\Http\Controllers;

use App\Models\WhyUpSection;
use Illuminate\Http\Request;

class WhyUpSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whyUps = WhyUpSection::all();
        return view('pages.back-home', compact('whyUps'));
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
     * @param  \App\Models\WhyUpSection  $whyUpSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = WhyUpSection::find($id);
        return view('partials.whyUpSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhyUpSection  $whyUpSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = WhyUpSection::find($id);
        return view('partials.whyUpSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhyUpSection  $whyUpSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = WhyUpSection::find($id);
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->button = $request->button;
        $update->save();

        return redirect('/back-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhyUpSection  $whyUpSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = WhyUpSection::find($id);
        $destroy->delete();

        return redirect('/back-home');
    }
}
