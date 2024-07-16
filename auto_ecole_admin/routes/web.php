<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EleveController;
use App\Http\Controllers\MoniteurController;
use App\Http\Controllers\VehiculeController;
use App\Http\Controllers\CourController;
use App\Http\Controllers\GroupeController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FullCalendarController;
use App\Http\Controllers\ParametreoController;
use App\Http\Controllers\SerieCoursController;
use App\Http\Controllers\SeriesController;
use App\Http\Controllers\VideoController;
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
use App\Http\Controllers\UserRegisterController;
use App\Http\Controllers\AdminController;

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

#Store new user registered info into db and show notification to admin

Route::get('/user-register', [UserRegisterController::class,'register']);
Route::post('/user-register-store', [UserRegisterController::class,'postRegistration'])->name('user.registerd');


#Display all notifications to Admin

Route::get('/notification', [AdminController::class,'showNotificaton'])->name('notification');

#Notification mark as Read

Route::put('notifications/{notification}', 'AdminController@update');
Route::post('/mark-as-read',[AdminController::class, 'markNotification'])->name('markNotification');
Route::delete('/delete/notification/{id}',[AdminController::class, 'supprimer'])->name('Supprimernotification');
Route::get('/admin/login', function () {
    return view('auth.login');
});

Route::get('/dashbord', function () {
    return view('Dashbord.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/Tableau_de_Bord', [DashboardController::class, 'PieChart'])->name('dashboard');



Route::get('/admin/gestion des facture', function () {
    return view('gestion des factures.index');
})->middleware(['auth', 'verified'])->name('G_facture');



Route::get('/admin/gestion des examens', function () {
    return view('gestion des examens.index');
})->middleware(['auth', 'verified'])->name('G-examen');
Route::get('/admin/Ajouter_cours_en_ligne', function () {
    return view('Ajout_Cours.index');
})->middleware(['auth', 'verified'])->name('Cours');
Route::get('/admin/gestion des comptes', function () {
    return view('gestion des comptes.index');
})->middleware(['auth', 'verified'])->name('G-compt');
Route::get('/admin/location des vehicules', function () {
    return view('location des vehicule.index');
})->middleware(['auth', 'verified'])->name('G-location');
 Route::resource('admin/eleve', EleveController::class);
 Route::resource('admin/moniteur', MoniteurController::class);
 Route::resource('admin/vehiecule', VehiculeController::class);
 Route::resource('admin/groupe', GroupeController::class);
 Route::resource('admin/cours', CourController::class);
 Route::resource('admin/parametre', ParametreoController::class);
 Route::get('/getevent', 'FullCalendarController@getEvent')->name('getevent');
 Route::post('/createevent','FullCalendarController@createEvent')->name('createevent');
 Route::post('/deleteevent','FullCalendarController@deleteEvent')->name('deleteevent');
 Route::post('/updateeevent','FullCalendarController@update')->name('updateeevent');
 Route::resource('admin/Permis',SerieCoursController::class);
 //Route::resource('admin/Serie',SeriesController::class);
 Route::GEt('admin/Serie/{id}',[SeriesController::class,'index'])->name('Serie.index');
 //Route::get('/admin/Permis/{id}',[SeriesController::class,'show'])->name('Serie.show');
 Route::Post('/admin/Serie',[SeriesController::class,'store'])->name('Serie.store');
 Route::delete('/admin/Serie/Permis/{id}',[SeriesController::class,'destroy'])->name('Serie.destroy');
 //Route::resource('admin/Video',VideoController::class);
 Route::GEt('admin/Serie/{id}/video',[VideoController::class,'index'])->name('Video.index');
 Route::Post('/admin/Video',[VideoController::class,'store'])->name('Video.store');
 Route::delete('/admin/Video/Permis/{id}',[VideoController::class,'destroy'])->name('Video.destroy');
require __DIR__.'/auth.php';
