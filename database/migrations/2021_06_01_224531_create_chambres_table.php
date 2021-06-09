<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateChambresTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('chambres', function (Blueprint $table) {
            $table->id();
            $table->string('type')->default("Chambre simple");
            $table->float('prix', 10)->default(150);
            $table->text('description');
            $table->integer('numero')->unique();
            $table->foreignId('hotel_id')->references('id')->on('hotels');
            $table->boolean("disponibilite")->default(true);
            $table->integer('nombreLit')->default(1);
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
        Schema::dropIfExists('chambres');
    }
}
