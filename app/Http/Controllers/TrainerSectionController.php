<?php

namespace App\Http\Controllers;

use App\Models\TrainerSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class TrainerSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $trainers = TrainerSection::all();
        return view('pages.back-home', compact('trainers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.TrainerSection.create');
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
            'name' => ['required', 'max:60'],
            'desp' => ['required', 'max:255'],
            'texte' => ['required', 'max:255'],
            'link_twitter' => ['required', 'max:100'],
            'link_facebook' => ['required', 'max:100'],
            'link_instagram' => ['required', 'max:100'],
            'link_linkedin' => ['required', 'max:100'],
        ]);

        $store = new TrainerSection;
        // Profil
        Storage::put('public/img/trainers/', $request->file('photo'));
        $store->photo = $request->file('photo')->hashName();

        // Texte
        $store->name = $request->name;
        $store->desp = $request->desp;
        $store->texte = $request->texte;

        // Link
        $store->link_twitter = $request->link_twitter;
        $store->link_facebook = $request->link_facebook;
        $store->link_instagram = $request->link_instagram;
        $store->link_linkedin = $request->link_linkedin;
        $store->save();

        return redirect('/TrainerSection/' . $store->id)->with('success', "Ajout réussi de la card trainer: $store->id");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TrainerSection  $TrainerSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show =TrainerSection::find($id);
        return view('partials.TrainerSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TrainerSection  $TrainerSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit =TrainerSection::find($id);
        return view('partials.TrainerSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\TrainerSection  $TrainerSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        request()->validate([
            'name' => ['required', 'max:60'],
            'desp' => ['required', 'max:255'],
            'texte' => ['required', 'max:255'],
            'link_twitter' => ['required', 'max:100'],
            'link_facebook' => ['required', 'max:100'],
            'link_instagram' => ['required', 'max:100'],
            'link_linkedin' => ['required', 'max:100'],
        ]);

        $update = TrainerSection::find($id);

        // Profil
        if ($request->photo != null) {
            if ($update->photo != 'trainer-1.jpg' && $update->photo !=  'trainer-2.jpg' && $update->photo !=  'trainer-3.jpg') {
                Storage::delete('public/img/trainers/' .$update->photo);
            }
            Storage::put('public/img/trainers/', $request->file('photo'));
            $update->photo = $request->file('photo')->hashName();
        }

        // Texte
        $update->name = $request->name;
        $update->desp = $request->desp;
        $update->texte = $request->texte;

        // Link
        $update->link_twitter = $request->link_twitter;
        $update->link_facebook = $request->link_facebook;
        $update->link_instagram = $request->link_instagram;
        $update->link_linkedin = $request->link_linkedin;
        $update->save();

        return redirect('/TrainerSection/' . $update->id)->with('warning', "Modification de la card trainer: $update->id");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TrainerSection  $TrainerSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = TrainerSection::find($id);
        if ($destroy->photo != 'trainer-1.jpg' && $destroy->photo !=  'trainer-2.jpg' && $destroy->photo !=  'trainer-3.jpg') {
            Storage::delete('public/img/trainers/' .$destroy->photo);
        }
        $destroy->delete();

        return redirect('/back-home')->with('danger', "Supprétion de la card trainer: $destroy->id");
    }
}
