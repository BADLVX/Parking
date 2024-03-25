<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;


class ReservationController extends Controller
{
    public function store(Request $request){
        //Créer une nouvelle instance de modèle reservations
        $reservations = new Reservation();

        // Enregistrer dans la base de données
        $reservations->save();

        //Rediriger avec un message de succès
        return redirect()->route('/accueil')->with('success', 'Reservation effectué avec succès');


    }

}
