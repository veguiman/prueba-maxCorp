<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMateriasTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('materias', function (Blueprint $table) {
            $table->increments('id');
            $table->string('nombre');
            $table->string('codigo');
            $table->string('horario');
            $table->enum('dias', ['lunes', 'martes', 'miercoles','jueves','viernes','sabado','domingo']);
            $table->string('descripcion');
            $table->integer('estudiante_id');
            $table->integer('profesor_id');
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
        Schema::dropIfExists('materias');
    }
}
