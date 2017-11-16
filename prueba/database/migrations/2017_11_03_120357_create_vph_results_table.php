<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVphResultsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('vph_results', function (Blueprint $table) {
            $table->increments('id');
            $table->string('result');
            $table->integer('datos_ginecos_id')->unsigned();

            $table->foreign('datos_ginecos_id')
                  ->references('id')
                  ->on('datos_ginecos')
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
        Schema::dropIfExists('vph_results');
    }
}
