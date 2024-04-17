<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Place;
use Carbon\Carbon;
use Auth;

class ReservationsController extends Controller
{
    public function store(Request $request){
        $IdUser = Auth::user()->id;
        $NumPlace = 1;


        $user = Auth::user();

       // Vérifier si l'utilisateur a déjà une réservation active
       if($user->reservations()->exists()) {
        $errorMessage = 'Vous avez déjà une réservation active.';
        return view('parking.error', compact('errorMessage'));
    }
        // Rechercher une place de parking disponible
        $availablePlace = Place::where('StatutPlace', 'disponible')->first();

        // Vérifier si une place est disponible
        if(!$availablePlace) {
            $errorMessage = 'Désolé, aucune place de parking disponible pour le moment.';
            return view('parking.error', compact('errorMessage'));
        }


        $reservations = Reservations::create([
           'IdUser' => $IdUser,
           'NumPlace' => $NumPlace,
           'DateFin' => Carbon::now()->addDays(7),
           'DateAttribution' => Carbon::now(),
           
       ]);
       
          // Mettre à jour le statut de la place de parking
          $availablePlace->update(['StatutPlace' => 'réservée']);

       return view('parking.dataReserver', ['reservations' => $reservations]);
    }
   
}
/*<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use App\Models\Place; // Import du modèle Place
use Carbon\Carbon;
use Auth;

class ReservationsController extends Controller
{
    public function store(Request $request){
        $user = Auth::user();

        // Vérifier si l'utilisateur a déjà une réservation active
        if($user->reservations()->exists()) {
            $errorMessage = 'Vous avez déjà une réservation active.';
            return view('parking.error', compact('errorMessage'));
        }

        // Rechercher une place de parking disponible
        $availablePlace = Place::where('StatutPlace', 'disponible')->first();

        // Vérifier si une place est disponible
        if(!$availablePlace) {
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

        // Rediriger vers la vue dataReserver avec les informations de réservation
        return view('parking.dataReserver', ['reservation' => $reservation]);
    }
}

*/
