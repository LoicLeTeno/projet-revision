<?php

namespace App\Http\Controllers;

use App\Models\FeatureSection;
use Illuminate\Http\Request;

class FeatureSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $features = FeatureSection::all();
        return view('pages.back-home', compact('features'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.featureSection.create');
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
            'color' => ['required'],
            'link' => ['required', 'max:100'],
            'titre' => ['required', 'max:30'],
        ]);

        $store = new FeatureSection;
        // Css
        $store->icon = $request->icon;
        $store->color = $request->color;
        // Html
        $store->link = $request->link;
        $store->titre = $request->titre;
        $store->save();

        return redirect('/featureSection/' .$store->id)->with('success', "Ajout réussi de la feature");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\FeatureSection  $featureSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = FeatureSection::find($id);
        return view('partials.featureSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\FeatureSection  $featureSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = FeatureSection::find($id);
        return view('partials.featureSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\FeatureSection  $featureSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'icon' => ['required'],
            'color' => ['required'],
            'link' => ['required', 'max:100'],
            'titre' => ['required', 'max:30'],
        ]);
        
        $update = FeatureSection::find($id);
        // Css
        $update->icon = $request->icon;
        $update->color = $request->color;
        // Html
        $update->link = $request->link;
        $update->titre = $request->titre;
        $update->save();

        return redirect('/featureSection/' .$update->id)->with('warning', "Modification de la feature: $update->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\FeatureSection  $featureSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = FeatureSection::find($id);
        $destroy->delete();

        return redirect('/back-home')->with('danger', "Supprétion de la feature: $destroy->id");
    }
}
