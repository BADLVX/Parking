<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Place extends Model
{
    protected $table = 'places';
    protected $primaryKey = 'numplace';
    protected $fillable = [
        'numplace',
    ];
    // Gerer les timestamps (created at, updated at) on peux les activer ainsi
    //public $timestamps = true;
}