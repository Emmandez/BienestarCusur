<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePsychosocialResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('psychosocialResults', function (Blueprint $table) {
            $table->increments('idPsychosocialResults');
            $table->integer('point'); //2 digitos
            $table->integer('numberFactor'); //1 digito

            //llaves foráneas
            $table->integer('psychosocial_idPsychosocial')->unsigned();
            $table->integer('recomend_idRecomendations')->unsigned();
            $table->integer('nameFactors_idNamesFactors')->unsigned();

            $table->foreign('psychosocial_idPsychosocial')
                  ->references('idPsychosocial')
                  ->on('psychosocial')->onDelete('cascade');
            $table->foreign('recomend_idRecomendations')
                  ->references('idRecomendation')
                  ->on('recomendations')->onDelete('cascade');
            $table->foreign('nameFactors_idNamesFactors')
                  ->references('idNamesFactors')
                  ->on('namesFactors')->onDelete('cascade');



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
        Schema::dropIfExists('psychosocialResults');
    }
}
