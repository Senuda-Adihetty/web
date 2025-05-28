<?php

use App\Http\Controllers\admin\sliderController;
use App\Http\Controllers\admin\anousementController;
use App\Http\Controllers\admin\settingsController;
use App\Http\Controllers\admin\blogController;
use App\Http\Controllers\main\packageContoller;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\settingsController as ControllersSettingsController;
use Illuminate\Support\Facades\Route;
use App\Models\slider;
use App\Models\anousementModel;
use App\Models\settings;
use App\Models\blogs;
use App\Http\Middleware\TimeRestrictedAccess;
use Ramsey\Uuid\Type\Time;

Route::get('/', function () {

    $setting = Settings::all()->pluck('value', 'key')->toArray();

    $sliders = slider::all();
    $anousements = anousementModel::all();
    $blogs = blogs::orderBy('created_at', 'desc')->paginate(3);
    return view('frontend.Home', compact('sliders', 'anousements', 'setting', 'blogs'));
});


Route::get('/mem', function () {

    return view('admin_panel.GMS.members');
});

Route::get('/blogs', function () {
    $setting = Settings::all()->pluck('value', 'key')->toArray();

    $blogs = blogs::orderBy('created_at', 'desc')->paginate(3);

    return view('frontend.blogs', compact('setting', 'blogs'));
});

Route::get('/blog/{slug}', function ($slug) {
    $setting = Settings::all()->pluck('value', 'key')->toArray();
    $blog = blogs::where('slug', $slug)->first();
    return view('frontend.blogSingle', compact('blog', 'setting'));
});



Route::get('/contact', function () {

    return view('frontend.contact');
});

Route::get('/about', function () {
    $setting = Settings::all()->pluck('value', 'key')->toArray();

    return view('frontend.about', compact('setting'));
});


// Protect TimeRestricted, Rout
Route::get('/gallery', function () {
    $setting = Settings::all()->pluck('value', 'key')->toArray();
    return view('frontend.gallery', compact('setting'));
})->middleware([TimeRestrictedAccess::class]);


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


Route::controller(settingsController::class)->middleware(['auth', 'verified'])->group(function () {
    Route::get('/settings', 'index')->name('settings');
    Route::post('/settingUpdate', 'update')->name('settings.update');
});

Route::controller(blogController::class)->middleware(['auth', 'verified'])->group(function () {

    Route::get('/blogIndex', 'index')->name('blog.index');
    Route::post('/saveBlog', 'storeBlog')->name('blog.save');
    Route::post('/blogUpdate/{id}', 'updateBlog')->name('blog.update');
    Route::get('/deleteBlog/{id}', 'deleteBlog')->name('blog.delete');
});

// back end Routes





require __DIR__ . '/auth.php';
