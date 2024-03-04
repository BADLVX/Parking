<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Utilisateur extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('Utilisateur', function(Blueprint $table) {
            $table->integer('Id');
            $table->integer('NumPlaceAtt');
            $table->string('MdpUser', 50);
            $table->string('NomUser', 50);
            $table->string('PrenomUser', 50);
            $table->string('StatutUser', 20);
            $table->string('EmailUser', 25);
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('Utilisateur');
    }
}
