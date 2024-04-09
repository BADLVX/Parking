<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class Reservation extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function(Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('IdUser');
            $table->foreign('IdUser')->references('id')->on('users');
            $table->foreignId('NumPlace');
            $table->foreign('NumPlace')->references('id')->on('places');
            $table->date('DateFin');
            $table->date('DateAttribution');
        });
    }
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reservations');
    }
}
