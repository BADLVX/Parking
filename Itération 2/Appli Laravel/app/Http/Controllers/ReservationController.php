<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class ReservationController extends Controller
{
    public function index()
    {
        $reservations = Reservation::all();
        return view('index',['reservations' => $reservations]);
    }
}
