<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateFactorsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('factors', function (Blueprint $table) {
            $table->increments('id');
            $table->enum('conceptofactor',['RUID', 'VIBR', 'TEEX', 'ILUM', 'RADI', 'QUIM', 'BIOL', 'ERGO', 'OTRO', 'ACCI']);

            $table->integer('Works_idWorks')->unsigned();

            $table->foreign('Works_idWorks')->references('idWorks')->on('works')->onDelete('cascade');
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
        Schema::dropIfExists('factors');
    }
}
