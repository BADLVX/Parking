<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Place;

class InsertPlaces extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
       Place::create([
           'id' => 1,
           'StatutPlace' => "Libre"
       ]);

        Place::create([
            'id' => 2,
            'StatutPlace' => "Libre"
        ]);

        Place::create([
            'id' => 3,
            'StatutPlace' => "Libre"
        ]);

        Place::create([
            'id' => 4,
            'StatutPlace' => "Libre"
        ]);

        Place::create([
            'id' => 5,
            'StatutPlace' => "Libre"
        ]);
    }
}
