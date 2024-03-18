<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Place extends Model
{
    use HasFactory;
    
    protected $table = 'places';
    protected $primaryKey = 'Id';
    protected $fillable = [
        'StatutPlace',
    ];
    // Gerer les timestamps (created at, updated at) on peux les activer ainsi
    //public $timestamps = true;
}