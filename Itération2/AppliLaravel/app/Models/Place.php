<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
class Place extends Model
{
    use HasFactory;

    public $timestamps = false;

    
    protected $fillable = [
        'StatutPlace',
    ];

  
 /**
     * Met à jour le statut de la place.
     *
     * @param string $newStatus Le nouveau statut de la place
     * @return bool True si la mise à jour réussit, sinon false
     */
    public function updateStatus($newStatus)
    {
        // Mettre à jour le statut de la place avec le nouveau statut
        $this->StatutPlace = $newStatus;
        
        // Sauvegarder les changements dans la base de données
        return $this->save();
    }
    // Gerer les timestamps (created at, updated at) on peux les activer ainsi
    //public $timestamps = true;
}