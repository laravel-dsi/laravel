<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateAbsencesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('absences', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->bigInteger('id_etud')->unsigned();
            $table->bigInteger('id_seance')->unsigned();
            $table->boolean('retard');
            $table->boolean('absences');
            $table->foreign('id_etud')->references('id_etud')->on('etudiants');
            $table->foreign('id_seance')->references('id_seance')->on('seances');


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
        Schema::dropIfExists('absences');
    }
}
