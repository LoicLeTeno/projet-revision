<?php

namespace App\Http\Controllers;

use App\Models\WhyDownSection;
use Illuminate\Http\Request;

class WhyDownSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $whyDowns = WhyDownSection::all();
        return view('pages.back-home', compact('whyDowns'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.whyDownSection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        request()->validate([
            'icon' => ['required'],
            'titre' => ['required', 'max:30'],
            'text' => ['required', 'max:255'],
        ]);

        $store = new WhyDownSection;
        $store->icon = $request->icon;
        $store->titre = $request->titre;
        $store->text = $request->text;
        $store->save();

        return redirect('/whyDownSection/' .$store->id)->with('success', "Ajout réussi de la card");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\WhyDownSection  $whyDownSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = WhyDownSection::find($id);
        return view('partials.whyDownSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\WhyDownSection  $whyDownSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = WhyDownSection::find($id);
        return view('partials.whyDownSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\WhyDownSection  $whyDownSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'icon' => ['required'],
            'titre' => ['required', 'max:30'],
            'text' => ['required', 'max:255'],
        ]);

        $update = WhyDownSection::find($id);
        $update->icon = $request->icon;
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->save();

        return redirect('/whyDownSection/' .$update->id)->with('warning', "Modification de card: $update->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\WhyDownSection  $whyDownSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = WhyDownSection::find($id);
        $destroy->delete();

        return redirect('/back-home')->with('warning', "Modification de la card: $destroy->id");
    }
}
