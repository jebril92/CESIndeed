<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\Admin\EtudiantController;
use App\Http\Controllers\Admin\PiloteController;
use App\Http\Controllers\EntrepriseController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/emplois', function () {
    return view('emplois');
})->name('emplois');

Route::get('/entreprise', function () {
    return view('entreprise');
})->name('entreprise');

Route::get('/welcome', function () {
    return view('welcome');
})->name('welcome');

Route::middleware('auth', 'user_type:admin')->group(function () {
    Route::get('/offres/create', [App\Http\Controllers\OffreController::class, 'create'])->name('offres.create');

    Route::post('/offres', [App\Http\Controllers\OffreController::class, 'store'])->name('offres.store');

    Route::get('/admin/pilotes', [App\Http\Controllers\Admin\PiloteController::class, 'index'])
    ->name('admin.pilotes');

    Route::get('/admin/etudiants', [App\Http\Controllers\Admin\EtudiantController::class, 'index'])->name('admin.etudiants.index');

    Route::delete('/admin/pilotes/{pilote}', [App\Http\Controllers\Admin\PiloteController::class, 'destroy'])
        ->name('admin.pilotes.delete');

    Route::get('/admin', function () {
        return view('admin');
    })->name('admin');
});


Route::get('/offres/create', [App\Http\Controllers\OffreController::class, 'create'])->name('offres.create');
Route::post('/offres', [App\Http\Controllers\OffreController::class, 'store'])->name('offres.store');
Route::get('/offres/{id}', [App\Http\Controllers\OffreController::class, 'show'])->name('offres.show');


//Route::get('/formulaire_entreprise', [EntrepriseController::class, 'create']);
//Route::match(['get', 'post'], '/formulaire_entreprise', [EntrepriseController::class, 'create']);

Route::post('/offres/postuler/{id}', 'OffreController@postuler')->name('offres.postuler');
Route::delete('/etudiants/{id}', [App\Http\Controllers\Admin\EtudiantController::class, 'destroy'])->name('etudiants.destroy');

Route::patch('/etudiants/{id}', [App\Http\Controllers\Admin\EtudiantController::class, 'update'])->name('etudiants.update');
Route::put('/etudiants/{id}', [EtudiantController::class, 'update'])->name('etudiants.update');
Route::delete('/pilotes/{id}', [PiloteController::class, 'destroy'])->name('pilotes.destroy');
Route::get('/offres', [OffreController::class, 'index'])->name('offres.index');



Route::post('/traitement_postuler_offre', 'App\Http\Controllers\OffreController@store')->name('traitement_postuler_offre');
Route::get('/traitement_postuler_offre', function () {
    return view('traitement_postuler_offre');
})->name('traitement_postuler_offre');

Route::get('/entreprises/create', [EntrepriseController::class, 'create'])->name('entreprises.create');
Route::post('/entreprises', [EntrepriseController::class, 'store'])->name('entreprises.store');

Route::get('/entreprises/create', function () {
    return view('entreprises.create');
})->name('entreprises.create');

Route::get('/offres', function () {
    return view('offres');
})->name('offres');

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');












require __DIR__.'/auth.php';
