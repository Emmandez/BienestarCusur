<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateExplorationsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('explorations', function (Blueprint $table) {
            $table->increments('id');
            $table->string('orgSis');
            $table->string('concept');
            $table->string('condition');
            $table->longText('description');
            
           //Campo para almacenar las llave foránea. Recordar que es una llave compuesta            
            $table->string('compilation_id');
            
            //definir llave foranea. Relación entre las tablas
            $table->foreign('compilation_id')
                  ->references('id')->on('compilations')
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
        Schema::dropIfExists('explorations');
    }
}
