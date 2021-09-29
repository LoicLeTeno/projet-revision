<?php

use App\Http\Controllers\AboutSectionController;
use App\Http\Controllers\CountSectionController;
use App\Http\Controllers\HeaderController;
use App\Http\Controllers\HomeHeroController;
use App\Models\AboutSection;
use App\Models\CountSection;
use App\Models\Footer;
use App\Models\Header;
use App\Models\HomeHero;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $headers = Header::all();
    $heroes = HomeHero::all();
    $abouts = AboutSection::all();
    $counts = CountSection::all();
    $footers = Footer::all();

    return view('pages.home', compact('headers', 'heroes', 'abouts', 'counts', 'footers'));
});

Route::get('/about', function () {
    $headers = Header::all();
    $footers = Footer::all();

    return view('pages.about', compact('headers', 'footers'));
});
Route::get('/courses', function () {
    $headers = Header::all();
    $footers = Footer::all();

    return view('pages.courses', compact('headers', 'footers'));
});
Route::get('/course-details', function () {
    $headers = Header::all();
    $footers = Footer::all();

    return view('pages.course-details', compact('headers', 'footers'));
});
Route::get('/trainers', function () {
    $headers = Header::all();
    $footers = Footer::all();

    return view('pages.trainers', compact('headers', 'footers'));
});
Route::get('/contact', function () {
    $headers = Header::all();
    $footers = Footer::all();

    return view('pages.contact', compact('headers', 'footers'));
});

// ------------------------------------------------------------------------------------------------------------

// DASHBOARD
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

// HOME
Route::get('/back-home', function () {
    $heroes = HomeHero::all();
    $abouts = AboutSection::all();
    $counts = CountSection::all();

    return view('pages.back-home', compact('heroes', 'abouts', 'counts'));
})->middleware(['auth'])->name('back-home');

// BACK-END
    // Page HOME
Route::resource('homeHero', HomeHeroController::class);
Route::resource('aboutSection', AboutSectionController::class);
Route::resource('countSection', CountSectionController::class);

require __DIR__.'/auth.php';
