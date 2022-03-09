<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('examens', function (Blueprint $table) {
            $table->id();
            $table->bigInteger('tema_id')->unsigned();
            $table->enum('nivel', ['basico', 'medio','avanzado']);
            $table->integer('numPreguntas');
            $table->date('fecha_inicio');
            $table->date('fecha_fin');
            $table->foreign('tema_id')->references('id')->on('temas')->onDelete('cascade');
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
        Schema::dropIfExists('examens');
    }
};
