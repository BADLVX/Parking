<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Reservations;
use Carbon\Carbon;

class ReservationsController extends Controller
{
    public function store(Request $request){
        $IdUser = 1;
        $NumPlace = 1;
   
        $reservations = Reservations::create([
           'IdUser' => $IdUser,
           'NumPlace' => $NumPlace,
           'DateFin' => Carbon::now()->addDays(7),
           'DateAttribution' => Carbon::now(),
           
       ]);
   
       return view('parking.dataReserver', ['reservations' => $reservations]);
    }
   
}
