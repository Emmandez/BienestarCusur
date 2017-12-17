<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDimensionsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('dimensions', function (Blueprint $table) {
            $table->increments('id');
            $table->String('Concept');
            $table->String('IV');
            $table->mediumText('Recomendation');
            $table->integer('Grade');

            $table->integer('cuestionarios_id')->unsigned();
            
            $table->foreign('cuestionarios_id')
                  ->references('id')
                  ->on('cuestionarios')
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
        Schema::dropIfExists('dimensions');
    }
}
