<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateGynecoResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('gyneco_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('result');
            /*
            Resultados de ultima mastografía
            Resultados de ultima citología
            */

            $table->integer('GynecoObstetricHistories_id')->unsigned();

            $table->foreign('GynecoObstetricHistories_id')
                  ->references('id')
                  ->on('GynecoObstetricHistories')
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
        Schema::dropIfExists('gyneco_results');
    }
}
