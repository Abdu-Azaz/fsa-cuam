<?php

use App\Http\Controllers\MediaController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoutesController;
use App\Http\Controllers\AnnounceController;
use App\Http\Controllers\EventController;
use App\Http\Controllers\TelegramController;
use App\Livewire\Search;
use App\Models\Announce;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Telegram\Bot\Laravel\Facades\Telegram;

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
/*
    Route::middleware('auth')->group(function () {
        Route::get('/artisan-storage-link', function () {
            return  Artisan::call('storage:link');
        });

        Route::get('/artisan-cache-clear', function () {
            return  Artisan::call('cache:clear');
        });

        Route::get('/artisan-migrate', function () {
            return  Artisan::call('migrate');
        });
    }); 
    */



Route::get("/announces.rb", [AnnounceController::class, 'index'])->name('announces.index');
Route::get("/announces/{slug}.rb", [AnnounceController::class, 'show'])->name('announces.show');

Route::get("/events.rb", [EventController::class, 'index'])->name('events.index');
Route::get("/events/{slug}.rb", [EventController::class, 'show'])->name('event.show');

Route::controller(RoutesController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
    Route::post('/upload_image', 'upload')->name('upload_image');
    Route::get('/departements_fac_sci_app_am.rb', 'departements')->name('departements');
    Route::get('/departments/{slug}.rb',  'departmentsHandle')->name('departement');
});

Route::view('/mot-du-doyen-de-la-fac-sci-app.rb', 'doyen')->name('doyen');
Route::get('/formations', [RoutesController::class, 'formations'])->name('formations');
Route::view('/faculte/loi-interne-fsaam.rb', 'loi-interne')->name('internal-rule');
Route::view('/faculte/adminstration_fsaam.rb', 'administration')->name("administration");
Route::view('/bibliotheque-fsaam.rb', 'library')->name("library");
Route::get('/timetables_emplois_des_temps_fsaam', [RoutesController::class, 'timetables'])->name("timetables");
Route::get('/clubs-and-stuff.rb', [RoutesController::class, 'clubs'])->name("clubs");
Route::view('/faculte/Systeme-LMD.rb', 'lmd')->name('lmd');
Route::get('/student_space/how-to.rb', [RoutesController::class, 'how_to'])->name('how_to');

Route::get('lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('switchLanguage');

// Route::get('/robots.txts', function () {
//     return abort(302);
// });

// Route::get('/media/delete/{path}', [MediaController::class, 'delete'])->name('media.delete');

Route::prefix('admin')->group(function () {
    Route::view('/my-media.rb', 'media')->name('media.index')->middleware('auth');
    // Route::get('/my-media/{path?}', [MediaController::class, 'index'])->name('media.index')->middleware('auth');
});


Route::post('/contact', [RoutesController::class, 'ContactUsForm'])->name('contact.store');
// Route::post('/add_node', [RoutesController::class, 'storeNode'])->name('node.store');
// Route::get('/search', Search::class);

Route::view('/teams_equipes_recherche.rb', 'research.teams')->name('research-teams');
Route::view('/labos_recherche_fsaam.rb', 'research.laboratories')->name('research-laboratories');

Route::post('/confirm_registration.rb', [RoutesController::class, 'students'])->name('reg');
Route::view('/register.rb', 'reg')->name('confirm.registration');
// Route::view('/t', 't');
Route::post('/cmd', function (Request $request) {
    $requestData = $request->input();

    // Access specific values from the JSON data
    $command = $requestData['command'];
    $output = Artisan::call($command);
    // Return response
    return response()->json(['OK' => $output]);
});

Route::get('/faculty/gallery', function(){
    return redirect('/gallery');
})->name('faculty.gallery');
Route::fallback(function () {
    abort(404, "Resource not found!");
});
