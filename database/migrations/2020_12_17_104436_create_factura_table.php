<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFacturaTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factura', function (Blueprint $table) {
            $table->bigIncrements('codigoF');
            $table->unsignedBigInteger('Numero');
            $table->foreign('Numero')->references('Numero')->on('habitacion')->onDelete('cascade');
            $table->unsignedBigInteger('clientes');
            $table->foreign('clientes')->references('id')->on('cliente')->onDelete('cascade');
            $table->unsignedBigInteger('formapagos');
            $table->foreign('formapagos')->references('id')->on('formapago')->onDelete('cascade');
            $table->date('Entrada');
            $table->date('Salida');
            $table->double('Total');
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
        Schema::dropIfExists('factura');
    }
}
