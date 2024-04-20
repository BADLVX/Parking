<?php

use Illuminate\Support\Facades\Route;
require __DIR__.'/auth.php';
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

/*Route::get('/', function () {
    return view('welcome');
});*/

Route::get('/', function () { // renvoie la vue apres l'authentification du middleware
    return view('parking.dashboard');
})->middleware(['auth'])->name('dashboard'); //Authentification dans la vue dashboard



Route::get('/accueil', function () {
    return view('parking.dashboard');
});


Route::get('/accueil', function () {
    return view('parking.dashboard');
});


Route::get('/etatreservation', function () {
    return view('parking.etatreservation');
});

Route::get('/anciennereservation', function () {
    return view('parking.anciennereservation');
});

Route::get('/reservero', function () {
    return view('parking.reservero');
});
Route::get('/dataReserver', function () {
    return view('parking.dataReserver');
});

Route::get('/place', function () {
    return view('parking.place');
});
//Route::get('/reserver', 'ReservationController@store')->name('reservations.store');

use App\Http\Controllers\ReservationsController;
Route::post('/reservations/store', [ReservationsController::class, 'store'])->name('reservations.store');

use App\Http\Controllers\UserController;
Route::get('/anciennereservation', [UserController::class, 'getUserReservations'])->name('anciennereservation');

use App\Http\Controllers\PlaceController;
Route::post('/places/{id}/reserve', [PlaceController::class, 'reservePlace'])->name('places.reserve');




