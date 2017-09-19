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
            $table->enum('orgSis', ['CACU','OJOS','OIDO', 'OROF', 'TORA','ABDO','GENI','EXTR','NEUR','PIEL']);
            $table->enum('concept', ['TIRO','OTRO','CONJ','CORN','CAUD','TIMP','CORA','PULM','PAAB','VISC','MISU','MIIN', 'COLU','SC']);
            $table->enum('condition',['NORM','ANOR']);
            $table->longText('description');
            
           //Campo para almacenar las llave foránea. Recordar que es una llave compuesta            
            $table->string('compilation_idCode', 7)->unique();
            
            //definir llave foranea. Relación entre las tablas
            $table->foreign('compilation_idCode')
                  ->references('idCode')->on('compilations')
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
