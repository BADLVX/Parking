<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Reservation extends Model
{
    use HasFactory;

//    protected $table = 'Reservations';
//    protected $primaryKey = 'idReservation';
       protected $fillable = ['datefin','datedebut'];

}
