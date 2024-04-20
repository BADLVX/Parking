<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Place;
use Carbon\Carbon;
use Auth;

use Illuminate\Support\Facades\DB;

class ReservationsController extends Controller
{
    public function store(Request $request)
    {
        $user = Auth::user();

        // Vérifier si l'utilisateur a déjà une réservation active
        if ($user->reservations()->exists()) {
            $errorMessage = 'Vous avez déjà une réservation active.';
            return view('parking.error', compact('errorMessage'));
        }

        
            // Rechercher une place de parking disponible
            $availablePlace = Place::where('StatutPlace', 'Libre')->first();

            // Vérifier si une place est disponible
            if (!$availablePlace) {
                $errorMessage = 'Désolé, aucune place de parking disponible pour le moment.';
                return view('parking.error', compact('errorMessage'));
            }

            // Créer une nouvelle réservation
            $reservation = Reservations::create([
                'IdUser' => $user->id,
                'NumPlace' => $availablePlace->id,
                'DateFin' => Carbon::now()->addDays(7),
                'DateAttribution' => Carbon::now(),
            ]);

           // Mettre à jour le statut de la place de parking
         $availablePlace->update(['StatutPlace' => 'réservée']);

        

            // Retourner la vue avec les informations de réservation
            return view('parking.dataReserver', ['reservations' => $reservation, 'reservedPlace' => $reservedPlace]);                 
    }


    //methode pour le statut de la reservation
    public function showReservationStatus()
    {
        // Récupérer l'utilisateur connecté
        $user = Auth::user();

        // Récupérer la réservation de l'utilisateur s'il en a une
        $reservation = $user->reservations()->first();

        // Vérifier si l'utilisateur a une réservation
        if (!$reservation) {
            $errorMessage = "Vous n'avez pas de réservation active.";
            return view('parking.error', compact('errorMessage'));
        }

        // Récupérer l'état de la place réservée
        $reservedPlace = Place::find($reservation->NumPlace);
        $reservationStatus = $reservedPlace->StatutPlace;

        // Afficher l'état de la réservation dans une vue dédiée
        return view('parking.etatreservation', compact('reservationStatus'));
    }
}

