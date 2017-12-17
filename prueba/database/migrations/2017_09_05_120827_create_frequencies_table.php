<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFrequenciesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('frequencies', function (Blueprint $table) {
            $table->increments('id');
            $table->string('concept');
            $table->string('years',2);
            $table->integer('frecuency'); 
            $table->string('exConsumer');

            $table->integer('nonPathologicalHistory_id')->unsigned();

            $table->foreign('nonPathologicalHistory_id')
                  ->references('id')
                  ->on('nonPathologicalHistories')
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
        Schema::dropIfExists('frequencies');
    }
}
