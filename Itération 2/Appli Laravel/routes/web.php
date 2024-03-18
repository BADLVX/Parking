<?php

use Illuminate\Support\Facades\Route;

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
    return view('parking.accueil');
})->middleware(['auth'])->name('dashboard'); //Authentification dans la vue dashboard

require __DIR__.'/auth.php';

Route::get('/accueil', function () {
    return view('parking.accueil');
});

Route::get('/reserver', function () {
    return view('parking.reserver');
});

Route::get('/etatreservation', function () {
    return view('parking.etatreservation');
});

Route::get('/anciennereservation', function () {
    return view('parking.anciennereservation');
});


use App\Http\Controllers\ReservationController;

Route::get('/reservations', [ReservationController::class, 'index'])->name('reservations.index');


