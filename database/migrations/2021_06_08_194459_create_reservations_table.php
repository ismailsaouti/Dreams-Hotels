<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reservations', function (Blueprint $table) {
            $table->id();
            $table->date('date_resevation');
            $table->date('date_depart');
            $table->date('date_arrive');
            $table->foreignId('user_id')->references('id')->on('users');
            $table->foreignId('hotel_id')->references('id')->on('hotels');
            $table->foreignId('chambre_id')->references('id')->on('chambres');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('reservations');
    }
}
