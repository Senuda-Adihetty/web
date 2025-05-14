<?php

use App\Http\Controllers\admin\sliderController;
use App\Http\Controllers\admin\anousementController;
use App\Http\Controllers\main\packageContoller;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\slider;
use App\Models\anousementModel;


 Route::get('/', function () {

    $sliders = slider::all();
    $anousements = anousementModel::all();
     return view('frontend.Home', compact('sliders', 'anousements'));
 });

Route::get('/blogs', function () {

     return view('frontend.blogs');
 });

Route::get('/contact', function () {

     return view('frontend.contact');
 });

Route::get('/about', function () {

     return view('frontend.about');
 });

Route::get('/trainers', function () {

     return view('frontend.trainers');
 });


Route::get('/dashboard', function () {
    return view('admin_panel.dashboard'); // I  edit this line
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {                             // I  edit this line
    Route::get('/profile', [ProfileController::class, 'edit'])->name('admin_panel.Profile.profile');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Front end Routes

Route::controller(sliderController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/slideIndex', 'SlideEditor')->name('slider.index');
    Route::post('/slideSave', 'SlideStore')->name('slider.save');
    Route::post('/slideIndex/{id}', 'SlideUpdater')->name('slider.update');
    Route::get('/slide/delete/{id}', 'SlideDelete')->name('slider.delete');
});

Route::controller(anousementController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/anousementIndex', 'index')->name('anousement.index');
    Route::post('/anousementSave', 'anousementStore')->name('anousement.save');
    Route::post('/anousementIndex/{id}', 'anousementUpdater')->name('anousement.update');
    Route::get('/anousement/delete/{id}', 'anousementDelete')->name('anousement.delete');
});



// back end Routes





require __DIR__.'/auth.php';
