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
            $table->increments('id');
            $table->integer('point'); //2 digitos
            $table->integer('numberFactor'); //1 digito

            //llaves foráneas
            $table->integer('psychosocial_id')->unsigned();
            $table->integer('recomendations_id')->unsigned();
            $table->integer('namesFactors_id')->unsigned();

            $table->foreign('psychosocial_id')
                  ->references('id')
                  ->on('psychosocial')
                  ->onDelete('cascade');

            $table->foreign('recomendations_id')
                  ->references('id')
                  ->on('recomendations')
                  ->onDelete('cascade');

            $table->foreign('namesFactors_id')
                  ->references('id')
                  ->on('namesFactors')
                  ->onDelete('cascade');



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
