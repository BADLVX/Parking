<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;
use App\Models\User;
use App\Models\Place;

class ReservationController extends Controller
{
    public function store(Request $request)
    {   
        //Validation des données reçues depuis le formulaire de réservation
        $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            'id_user' => 'required|exists:User,id',
            'num_place' => 'required|exists:Places, numplace',
        ]);

        //Création de la réservation

        $reservation = Reservation::create([
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'id_user' => $request->id_user,
            'num_place' => $request->num_place,
        ]);

        //redirection vers une page de confirmation
        return redirect()->route('confirmation');
    }
}