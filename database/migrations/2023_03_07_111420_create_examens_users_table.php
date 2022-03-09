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
        Schema::create('examens_users', function (Blueprint $table) {
            $table->id();
            $table->date("fecha_realizacion")->nullable();
            $table->integer("num_respuestas_correctas")->unsigned()->nullable();
            $table->bigInteger("examen_id")->unsigned();
            $table->bigInteger("user_id")->unsigned();
            $table->foreign("examen_id")->references("id")->on("examens")->onDelete("cascade");
            $table->foreign("user_id")->references("id")->on("users")->onDelete("cascade");
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
        Schema::dropIfExists('examens_users');
    }
};
