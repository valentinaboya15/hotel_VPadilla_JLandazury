<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReservaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reserva', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('Numero');
            $table->foreign('Numero')->references('Numero')->on('habitacion')->onDelete('cascade');
            $table->unsignedBigInteger('clientes');
            $table->foreign('clientes')->references('id')->on('cliente')->onDelete('cascade');
            $table->dateTime('Entrada');
            $table->dateTime('Salida');
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
        Schema::dropIfExists('reserva');
    }
}
