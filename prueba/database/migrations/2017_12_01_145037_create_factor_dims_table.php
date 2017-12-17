<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactorDimsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factor_dims', function (Blueprint $table) {
            $table->increments('id');
            $table->string('Type');
            $table->string('Concept');            
            $table->string('Recomendation');
            $table->string('IV');
            $table->integer('Grade');

            $table->integer('dimensions_id')->unsigned();

            $table->foreign('dimensions_id')
                  ->references('id')
                  ->on('dimensions')
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
        Schema::dropIfExists('factor_dims');
    }
}
