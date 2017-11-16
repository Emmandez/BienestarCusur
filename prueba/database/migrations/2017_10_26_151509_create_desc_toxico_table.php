<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateDescToxicoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('desc_toxico', function (Blueprint $table) {
            $table->increments('id');
            $table->string('description_toxico');
            $table->integer('frecuencies_id')->unsigned();

            $table->foreign('frecuencies_id')
                  ->references('id')
                  ->on('frequencies')
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
        Schema::dropIfExists('desc_toxico');
    }
}
