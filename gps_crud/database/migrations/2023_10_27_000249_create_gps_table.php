<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGpsTable extends Migration
{
    public function up()
    {
        Schema::create('gps', function (Blueprint $table) {
            $table->id();
            $table->integer('id_caminhao');
            $table->decimal('lat', 10, 7);
            $table->decimal('long', 10, 7);
            $table->datetime('horario');
            $table->decimal('velocidade', 8, 2);
            $table->integer('id_carga')->nullable(); // Pode ser nula se não estiver associada a uma carga
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('gps');
    }
};