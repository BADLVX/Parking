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
        Schema::create('Reservations', function(Blueprint $table) {
            $table->id();
            $table->integer('IdUser');
            $table->integer('NumPlace');
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
        Schema::drop('Reservations');
    }
}
