<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\EventController;
use App\Livewire\Search;
use App\Models\Announce;
use Illuminate\Support\Facades\Artisan;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/artisan-storage-link', function(){
    return  Artisan::call('storage:link');
});

Route::get('/artisan-cache-clear', function(){
    return  Artisan::call('cache:clear');
});

Route::get('/artisan-migrate', function(){
    return  Artisan::call('migrate');
});

Route::get("/announces", [AnnounceController::class, 'index'])->name('announces.index');
Route::get("/announces/{slug}", [AnnounceController::class, 'show'])->name('announces.show');

Route::get("/events", [EventController::class, 'index'])->name('events.index');
Route::get("/events/{slug}", [EventController::class, 'show'])->name('event.show');

Route::controller(RoutesController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
    Route::post('/upload_image', 'upload')->name('upload_image');
    Route::get('/departements', 'departements')->name('departements');
    Route::get('/departments/{slug}',  'departmentsHandle')->name('departement');
});

Route::view('/mot-du-doyen', 'doyen')->name('doyen');
Route::get('/formations', [RoutesController::class, 'formations'])->name('formations');
Route::view('/faculte/presentation', 'presentation')->name('presentation');
Route::view('/faculte/adminstration', 'administration')->name("administration");
Route::view('/bibliotheque', 'library')->name("library");
Route::get('/timetables', [RoutesController::class, 'timetables'])->name("timetables");
Route::get('/clubs-and-stuff', [RoutesController::class, 'clubs'])->name("clubs");
Route::view('/faculte/Systeme-LMD', 'lmd')->name('lmd');


Route::get('lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('switchLanguage');

Route::get('/login', function () {
    return redirect(route('filament.admin.auth.login'));
})->name('login');

// Route::get('/media/delete/{path}', [MediaController::class, 'delete'])->name('media.delete');

Route::prefix('admin')->group(function(){
    Route::view('/my-media', 'media')->name('media.index')->middleware('auth');
    // Route::get('/my-media/{path?}', [MediaController::class, 'index'])->name('media.index')->middleware('auth');
});

Route::post('/contact', [RoutesController::class, 'ContactUsForm'])->name('contact.store');
Route::post('/add_node', [RoutesController::class, 'storeNode'])->name('node.store');

// Route::get('/search', Search::class);
Route::view('/test', 'test');
Route::view('/teams', 'research.teams')->name('research-teams');
Route::view('/labs', 'research.laboratories')->name('research-laboratories');
Route::fallback(function(){
    abort(404, "Resource not found!");
});