<?php

namespace App\Http\Controllers;

use App\Models\PopularItemSection;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class PopularItemSectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pupularItems = PopularItemSection::all();
        return view('pages.back-home', compact('pupularItems'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('partials.popularItemSection.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $store = new PopularItemSection;

        // Image
        Storage::put('public/img/', $request->file('image'));
        $store->image = $request->file('image')->hashName();

        // Details
        $store->desp = $request->desp;
        $store->price = $request->price;

        // Text
        $store->titre = $request->titre;
        $store->text = $request->text;

        // Profil
        Storage::put('public/img/trainers/', $request->file('photo'));
        $store->photo = $request->file('photo')->hashName();
        $store->name = $request->name;
        $store->view = $request->view;
        $store->love = $request->love;
        $store->save();

        return redirect('/popularItemSection/' .$store->id);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\PopularItemSection  $popularItemSection
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $show = PopularItemSection::find($id);
        return view('partials.popularItemSection.show', compact('show'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\PopularItemSection  $popularItemSection
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $edit = PopularItemSection::find($id);
        return view('partials.popularItemSection.edit', compact('edit'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\PopularItemSection  $popularItemSection
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $update = PopularItemSection::find($id);

        // Image
        if ($request->image != null) {
            if ($update->image != 'course-1.jpg' && $update->image !=  'course-2.jpg' && $update->image !=  'course-3.jpg') {
                Storage::delete('public/img/' .$update->image);
            }
            Storage::put('public/img/', $request->file('image'));
            $update->image = $request->file('image')->hashName();
        }

        // Details
        $update->desp = $request->desp;
        $update->price = $request->price;

        // Text
        $update->titre = $request->titre;
        $update->text = $request->text;

        // Profil
        if ($request->photo != null) {
            if ($update->photo != 'trainer-1.jpg' && $update->photo !=  'trainer-2.jpg' && $update->photo !=  'trainer-3.jpg') {
                Storage::delete('public/img/trainers/' .$update->photo);
            }
            Storage::put('public/img/trainers/', $request->file('photo'));
            $update->photo = $request->file('photo')->hashName();
        }
        $update->name = $request->name;
        $update->view = $request->view;
        $update->love = $request->love;
        $update->save();

        return redirect('/popularItemSection/' .$update->id);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\PopularItemSection  $popularItemSection
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $destroy = PopularItemSection::find($id);
        if ($destroy->image != 'course-1.jpg' && $destroy->image !=  'course-2.jpg' && $destroy->image !=  'course-3.jpg') {
            Storage::delete('public/img/' .$destroy->image);
        }
        if ($destroy->photo != 'trainer-1.jpg' && $destroy->photo !=  'trainer-2.jpg' && $destroy->photo !=  'trainer-3.jpg') {
            Storage::delete('public/img/trainers/' .$destroy->photo);
        }
        $destroy->delete();

        return redirect('/back-home');
    }
}
