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



Route::get("/announces", [AnnounceController::class, 'index'])->name('announces.index');
Route::get("/announces/{slug}.rb", [AnnounceController::class, 'show'])->name('announces.show');

Route::get("/events.rb", [EventController::class, 'index'])->name('events.index');
Route::get("/events/{slug}.rb", [EventController::class, 'show'])->name('event.show');

Route::controller(RoutesController::class)->group(function () {
    Route::get('/', 'index')->name('homepage');
    Route::post('/upload_image', 'upload')->name('upload_image');
    Route::get('/departements_fac_sci_app_am.rb', 'departements')->name('departements');
    Route::get('/departments/{slug}',  'departmentsHandle')->name('departement');
});

Route::view('/mot-du-doyen-de-la-fac-sci-app.rs', 'doyen')->name('doyen');
Route::get('/formations', [RoutesController::class, 'formations'])->name('formations');
Route::view('/faculte/loi-interne-fsaam', 'loi-interne')->name('internal-rule');
Route::view('/faculte/adminstration_fsaam.rs', 'administration')->name("administration");
Route::view('/bibliotheque-fsaam.rs', 'library')->name("library");
Route::get('/timetables_emplois_des_temps_fsaam', [RoutesController::class, 'timetables'])->name("timetables");
Route::get('/clubs-and-stuff', [RoutesController::class, 'clubs'])->name("clubs");
Route::view('/faculte/Systeme-LMD', 'lmd')->name('lmd');
Route::get('/student_space/how-to', [RoutesController::class, 'how_to'])->name('how_to');

Route::get('lang/{locale}', function ($locale) {
    app()->setLocale($locale);
    session()->put('locale', $locale);
    return redirect()->back();
})->name('switchLanguage');

// Route::get('/login', function () {
//     return redirect(route('filament.admin.auth.login'));
// })->name('login');

// Route::get('/media/delete/{path}', [MediaController::class, 'delete'])->name('media.delete');

Route::prefix('admin')->group(function () {
    Route::view('/my-media', 'media')->name('media.index')->middleware('auth');
    // Route::get('/my-media/{path?}', [MediaController::class, 'index'])->name('media.index')->middleware('auth');
});

Route::post('/contact', [RoutesController::class, 'ContactUsForm'])->name('contact.store');
// Route::post('/add_node', [RoutesController::class, 'storeNode'])->name('node.store');
// Route::get('/search', Search::class);

Route::view('/teams_equipes_recherche.rs', 'research.teams')->name('research-teams');
Route::view('/labos_recherche_fsaam.rs', 'research.laboratories')->name('research-laboratories');

Route::post('/confirm_registration.rb', [RoutesController::class, 'students'])->name('reg');
Route::view('/register.rb', 'reg');

Route::fallback(function () {
    abort(404, "Resource not found!");
});
