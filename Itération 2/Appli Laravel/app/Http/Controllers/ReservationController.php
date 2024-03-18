<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservation;

class ReservationController extends Controller
{
    public function store(Request $request)
    {   
        // Validation des données reçues depuis le formulaire de réservation
        $request->validate([
            'date_debut' => 'required|date',
            'date_fin' => 'required|date|after:date_debut',
            // Assurez-vous que 'id_user' est valide, vous pouvez utiliser Auth::id() pour l'ID de l'utilisateur actuel
            'id_user' => 'required|exists:users,id',
            'num_place' => 'required|exists:places,numplace',
        ]);

        // Création de la réservation
        $reservation = Reservation::create([
            'date_debut' => $request->date_debut,
            'date_fin' => $request->date_fin,
            'id_user' => $request->id_user,
            'num_place' => $request->num_place,
        ]);

        // Redirection vers la méthode show() pour afficher la liste des réservations
        return redirect()->route('reservation.show');
    }

    public function show()
    {
        // Récupérer les réservations pour affichage
        $reservations = Reservation::all(); // Vous pouvez modifier cela selon vos besoins

        // Passer les réservations à la vue
        return view('listeReservation', compact('reservations'));
    }
}
