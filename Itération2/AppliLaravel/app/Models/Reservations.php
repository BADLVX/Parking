<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Reservations extends Model
{
    use HasFactory;

    protected $fillable = ['IdUser', 'NumPlace', 'DateFin','DateAttribution'];

    public $timestamps = false;

    public function user()
    {
        return $this->belongsTo(User::class, 'IdUser');
    }
}
 