<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class UserController extends Controller
{
   
    public function getUserReservations()
    {
        $userReservations = User::with('reservations')->get();
        return $userReservations;
        //return response()->json($userReservations);
    }
}
