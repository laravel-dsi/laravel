<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProfsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('profs', function (Blueprint $table) {
            $table->bigIncrements('id_prof');
            $table->string('nom',20);
            $table->string('prenom',20);
            $table->string('email',50);
            $table->string('password');
            $table->string('tel',12);
            $table->bigInteger('id_admin')->unsigned();
            $table->foreign('id_admin')->references('id_admin')->on('admins');
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
        Schema::dropIfExists('profs');
    }
}
