<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCorporationUserTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('corporation_user', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('corporation_id');
            $table->date('fechainicio');
            $table->date('fechafin');
            $table->integer('valoracionalumno');
            $table->integer('valoracioncentro');

            $table->foreign('user_id')->references('id')->on('users')->onDelate('cascade')->unUpdate('cascade');
            $table->foreign('corporation_id')->references('id')->on('corporations')->onDelate('cascade')->unUpdate('cascade');
            
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('corporation_user');
    }
}
