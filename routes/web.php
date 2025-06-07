<?php

use App\Http\Controllers\admin\sliderController;
use App\Http\Controllers\admin\anousementController;
use App\Http\Controllers\admin\settingsController;
use App\Http\Controllers\admin\blogController;
use App\Http\Controllers\admin\PermissionsController;
use App\Http\Controllers\admin\RoleController;
use App\Http\Controllers\admin\permissionUserController;
use App\Http\Controllers\admin\contactController;
use App\Http\Controllers\admin\trainerController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Models\slider;
use App\Models\anousementModel;
use App\Models\settings;
use App\Models\blogs;
use App\Models\trainer;
use App\Http\Middleware\TimeRestrictedAccess;
use Illuminate\Support\Facades\Auth;


Route::get('/', function () {

    $setting = Settings::all()->pluck('value', 'key')->toArray();
    $trainers = trainer::all();
    $sliders = slider::all();
    $anousements = anousementModel::all();
    $blogs = blogs::orderBy('created_at', 'desc')->paginate(3);
    return view('frontend.Home', compact('sliders', 'anousements', 'setting', 'blogs', 'trainers'));
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
    $setting = Settings::all()->pluck('value', 'key')->toArray();
    return view('frontend.contact',  compact('setting'));
});

Route::controller(contactController::class)->group(function () {

    Route::get('/adminContact', 'index')->middleware(['role:super-admin'])->name('contact');
    Route::post('/contactSave', 'store')->name('contact.store');
    Route::get('/contact/{id}/delete', 'destroy')->middleware(['role:super-admin'])->name('contact.delete');
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
    $user = Auth::user();
    $trainer = Trainer::where('email', $user->email)->first();

    return view('admin_panel.dashboard', compact('trainer'));
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


Route::controller(PermissionsController::class)->middleware(['auth', 'verified'])->group(function () {

    Route::get('/permissionIndex', 'index')->name('permission.index');;
    Route::post('/savePermission', 'storepermission')->name('permission.store');
    Route::post('/permissionUpdate', 'updatepermission')->name('permission.update');
    Route::get('/deletePermission/{id}', 'deletepermission')->middleware(['role:super-admin'])->name('permission.delete');
});

Route::controller(RoleController::class)->middleware(['auth', 'verified'])->group(function () {

    Route::get('/roleIndex', 'index')->name('role.index');;
    Route::post('/saveRole', 'storerole')->name('role.store');
    Route::post('/roleUpdate', 'updaterole')->name('role.update');
    Route::get('/deleteRole/{id}', 'deleterole')->middleware(['role:super-admin'])->name('role.delete');

    Route::get('/permissionToRole/{id}', 'givePermissionToRole')->name('role.givePermissionToRole');
    Route::put('/givePermissionToRole/{id}', 'giveRoleToPermission')->name('role.giveRoleToPermission');
});


Route::controller(permissionUserController::class)->middleware(['auth', 'verified', 'role:super-admin|Core-Admin'])->group(function () {

    Route::get('/userIndex', 'index')->name('user.index');;
    Route::post('/saveUser', 'storeuser')->name('user.store');
    Route::post('/userUpdate', 'updateuser')->name('user.update');
    Route::get('/deleteUser/{id}', 'deleteuser')->middleware(['role:super-admin'])->name('user.delete');
});

Route::controller(trainerController::class)->middleware(['auth', 'verified'])->group(function () {

    Route::get('/trainerIndex', 'index')->name('trainer.index');
    Route::post('/saveTrainer', 'storeTrainer')->name('blog.save');
    Route::post('/trainerUpdate/{id}', 'updateTrainer')->name('trainer.update');
    Route::get('/deleteTrainer/{id}', 'deleteTrainer')->name('trainers.delete');
});

require __DIR__ . '/auth.php';
