<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHabitacionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('habitacion', function (Blueprint $table) {
            $table->bigIncrements('Numero');
           // $table->primary('Numero');
            $table->string('Descripcion');
            $table->integer('Num_camas');
            $table->string('Foto', 45);
            $table->unsignedBigInteger('precio_id');

            $table->foreign('precio_id')->references('id')->on('precios')->onDelete('cascade');

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
        Schema::dropIfExists('habitacion');
    }
}
