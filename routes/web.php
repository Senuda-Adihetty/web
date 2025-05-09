<?php

use App\Http\Controllers\admin\sliderController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\slider;

 Route::get('/', function () {

    $sliders = slider::all();
     return view('frontend.Home', compact('sliders'));
 });

Route::get('/dashboard', function () {
    return view('admin_panel.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


// Route::controller(sliderController::class)->middleware(['auth', 'verified'])->group(function (){
//     Route::get('/slideIndex','SlideEditor')->name('slider.index');
//     Route::post('/slideSave','SlideStore')->name('slider.save');

//     Route::post('/slideIndex/{id}',[sliderController::class,'SlideUpdater'])->name('slider.update');;

//     Route::get('/slide/delete/{id}', [sliderController::class, 'SlideDelete'])->name('slider.delete');

// });

Route::controller(sliderController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/slideIndex', 'SlideEditor')->name('slider.index');
    Route::post('/slideSave', 'SlideStore')->name('slider.save');
    Route::post('/slideIndex/{id}', 'SlideUpdater')->name('slider.update');
    Route::get('/slide/delete/{id}', 'SlideDelete')->name('slider.delete');
});



require __DIR__.'/auth.php';
