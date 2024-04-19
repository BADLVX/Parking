<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Place;
use App\Models\Reservations;


class PlaceController extends Controller
{ /**
    * Mettre à jour le statut de la place de "Libre" à "Reservee".
    *
    * @param  int  $id
    * @return \Illuminate\Http\Response
    */
   public function reservePlace($id)
   {
       // Recherche de la place par son identifiant
       $place = Place::find($id);
        $reserv = Reservations::whereId(42);
        $reserv->delete();
       
       // Vérification si la place existe
       if (!$place){
           // Si la place n'existe pas, retourner une erreur
           return response()->json(['message' => 'Place non trouvée.'], 404);
       }

       // Vérification du statut de la place
       if ($place->StatutPlace == 'Libre') {
        $place->updateStatus('Reservee');
               return response()->json(['message' => 'Place réservée avec succès.']);
           } 
        
          
   }
}
  