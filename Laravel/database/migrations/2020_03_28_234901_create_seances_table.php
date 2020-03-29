<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSeancesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('seances', function (Blueprint $table) {
            $table->bigIncrements('id_seance');
            $table->date('date_debut');
            $table->date('date_fin');
            $table->string('matiere');
            $table->bigInteger('id_prof')->unsigned();
            $table->bigInteger('id_classe')->unsigned();
            $table->foreign('id_prof')->references('id_prof')->on('profs');
            $table->foreign('id_classe')->references('id_classe')->on('classes');
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
        Schema::dropIfExists('seances');
    }
}
