<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ReservationController extends Controller
{
    public function index()
    {
        $reservation = Reservation::all();
        return view('reservations.index',compact('reservations))'));
    }
}
