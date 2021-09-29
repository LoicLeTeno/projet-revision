<?php

namespace App\Http\Controllers;

use App\Models\HomeHero;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HomeHeroController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $heroes = HomeHero::all();
        return view('pages.back-home', compact('heroes'));
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
     * @param  \App\Models\HomeHero  $homeHero
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = HomeHero::find($id);
        return view('partials.homeHero.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\HomeHero  $homeHero
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = HomeHero::find($id);
        return view('partials.homeHero.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\HomeHero  $homeHero
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = HomeHero::find($id);
        // Texte
        $update->titre_pt_1 = $request->titre_pt_1;
        $update->titre_pt_2 = $request->titre_pt_2;
        $update->sous_titre = $request->sous_titre;
        // Image
        if ($request->image != null) {
            if ($update->image != 'hero-bg.jpg') {
                Storage::delete('public/img/' .$update->image);
            }
            Storage::put('public/img/', $request->file('image'));
            $update->image = $request->file('image')->hashName();
        }
        $update->save();

        return redirect('/back-home');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\HomeHero  $homeHero
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = HomeHero::find($id);
        $destroy->delete();

        return redirect('/back-home');
    }
}
