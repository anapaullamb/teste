<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClientesHorariosTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('clientes_horarios', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('cliente');
            $table->unsignedBigInteger('horario');
            $table->foreign('horario')->references('id')->on('horarios');
            $table->foreign('cliente')->references('id')->on('clientes');
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
        Schema::dropIfExists('clientes_horarios');
    }
}
