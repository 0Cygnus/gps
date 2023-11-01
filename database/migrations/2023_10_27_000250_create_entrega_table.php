<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEntregaTable extends Migration
{
    public function up()
    {
        Schema::create('entrega', function (Blueprint $table) {
            $table->id('id_carga');
            $table->string('carga_desc');
            $table->integer('id_cliente');
            $table->string('cliente');
            $table->boolean('duravel');
            $table->integer('prioridade');
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('entrega');
    }
}
;
