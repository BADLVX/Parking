<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Reservation extends Model
{
    protected $table = 'reservations';
    protected $primaryKey = 'idReservation';
    protected $fillable = [
        'datefin',
         'datedebut',
    
    ];
    // Gerer les timestamps (created at, updated at) on peux les activer ainsi
    //public $timestamps = true;
}