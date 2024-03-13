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

Route::get('/', function () {
    return view('ParkingAccueil');

    $utilisateur = new \App\Models\utilisateur();
    $utilisateur-> nomUser = 'Mezaoui';
    $utilisateur -> prenomUser = 'Sofiane';
    $utilisateur -> save();

    return $utilisateur;
});

Route::get('/Acceuil', function () {
    return view('ParkingAccueil');
});

Route::get('/EtatReservation', function () {
    return view('etatreservation');
});

Route::get('/AncienneReservation', function () {
    return view('anciennereservation');
});

Route::get('/Reserver', function () {
    return view('reserver');
});



