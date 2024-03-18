<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Place;

class ReservationController extends Controller
{
    public function index()
    {
        $places = Place::all();
        return view('index',['places' => $places]);
    }
}
