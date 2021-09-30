<?php

namespace App\Http\Controllers;

use App\Models\AboutSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AboutSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $abouts = AboutSection::all();
        return view('pages.back-home', compact('abouts'));
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
     * @param  \App\Models\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = AboutSection::find($id);
        return view('partials.aboutSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = AboutSection::find($id);
        return view('partials.aboutSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'titre' => ['required', 'max:255'],
            'text' => ['required', 'max:255'],
            'li_1' => ['required', 'max:255'],
            'li_2' => ['required', 'max:255'],
            'li_3' => ['required', 'max:255'],
            'sous_text' => ['required', 'max:255'],
        ]);

        $update = AboutSection::find($id);
        // Image
        if ($request->image != null) {
            if ($update->image != 'about.jpg') {
                Storage::delete('public/img/' .$update->image);
            }
            Storage::put('public/img/', $request->file('image'));
            $update->image = $request->file('image')->hashName();
        }
        // Texte
        $update->titre = $request->titre;
        $update->text = $request->text;
        $update->li_1 = $request->li_1;
        $update->li_2 = $request->li_2;
        $update->li_3 = $request->li_3;
        $update->sous_text = $request->sous_text;
        $update->save();

        return redirect('/aboutSection/' .$update->id)->with('warning', 'Modificiation Réussi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\AboutSection  $aboutSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = AboutSection::find($id);
        $destroy->delete();

        return redirect('/back-home')->with('danger', "Supprétion de l'about Section");
    }
}
