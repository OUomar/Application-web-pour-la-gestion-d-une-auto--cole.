<?php

use App\Http\Controllers\ProfilEleveController;
use App\Http\Controllers\ListeEleveController;
use App\Http\Controllers\ListeGroupeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileMoniteurController;
use App\Http\Controllers\CalenderMoniteurController;
use App\Http\Controllers\CoursvideoController;
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
    return view('welcome');
});

//élève

/*Route::get('/élève/Profil', function () {
    return view('user.Profil.index');
})->middleware(['auth', 'verified'])->name('dashboard');*/
Route::resource('/élève/Profil', ProfilEleveController::class);
Route::get('edit eleve/{id}', [ProfilEleveController::class, 'edit'])->middleware(['auth', 'verified'])->name('edit.profile.eleve');

Route::get('/élève/Séances pratique', function () {
    return view('user.séance_pratique.index');
})->middleware(['auth', 'verified'])->name('S_pratique');





Route::get('élève/Cours',[CoursvideoController::class,'index'])->name('cours');
Route::get('/élève/Contact', function () {
    return view('user.contact.index');
})->middleware(['auth', 'verified'])->name('contact');

require __DIR__.'/auth.php';

//moniteur


Route::get('/moniteur/Profil', function () {
    return view('moniteur.Profil.index');
})->middleware(['auth:moniteur', 'verified'])->name('moniteur.dashboard');

Route::get('edit Moniteur/{id}', [ProfileMoniteurController::class, 'edit'])->middleware(['auth:moniteur', 'verified'])->name('edit.profile.moniteur');
Route::put('edit Moniteur/{id}', [ProfileMoniteurController::class, 'update'])->middleware(['auth:moniteur', 'verified'])->name('save.edit.profile.moniteur');

Route::get('/moniteur/list des élèves', [ListeEleveController::class, 'index'])->middleware(['auth:moniteur', 'verified'])->name('moniteur.l_eleves');

Route::resource('/moniteur/liste des group', ListeGroupeController::class)->middleware(['auth:moniteur', 'verified']);
Route::get('/moniteur/liste des group/{id}', [ListeGroupeController::class, 'show'])->middleware(['auth:moniteur', 'verified'])->name('monieur.liste.eleve');
Route::get('/moniteur/list des vehicule', function () {
    return view('moniteur.liste des vehicules.index');
})->middleware(['auth:moniteur', 'verified'])->name('moniteur.l_vehicules');

Route::get('/moniteur/Cours', function () {
    return view('moniteur.cours.index');
})->middleware(['auth:moniteur', 'verified'])->name('moniteur.cours');

Route::resource('/moniteur/calendrer', CalenderMoniteurController::class)->middleware(['auth:moniteur', 'verified']);
Route::get('/getevent', 'FullCalendarController@getEvent')->name('S_théorique');
Route::post('/createevent','FullCalendarController@createEvent')->name('createevent');
Route::post('/deleteevent','FullCalendarController@deleteEvent')->name('deleteevent');
Route::post('/updateeevent','FullCalendarController@update')->name('updateeevent');
Route::get('/moniteur/message', function () {
    return view('moniteur.message.index');
})->middleware(['auth:moniteur', 'verified'])->name('moniteur.message');

require __DIR__.'/moniteurauth.php';
