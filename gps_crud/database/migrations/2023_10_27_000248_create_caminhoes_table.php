<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::create('caminhoes', function (Blueprint $table) {
        $table->id();
        $table->string('nome_caminhao');
        $table->string('chassi');
        $table->string('placa');
        $table->integer('ano_caminhao');
        $table->boolean('status')->default(false);
        $table->timestamps();
    });
}

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('caminhoes');
    }
};
