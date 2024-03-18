<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reservation extends Model
{
    use HasFactory;
    
    protected $table = 'reservations';
    protected $primaryKey = 'idReservation';
    protected $fillable = [
        'datefin',
         'datedebut',
    
    ];
    // Gerer les timestamps (created at, updated at) on peux les activer ainsi
    //public $timestamps = true;
}