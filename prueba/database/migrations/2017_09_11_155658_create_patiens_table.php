<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePatiensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('patients', function (Blueprint $table) {
            $table->increments('id');

            $table->enum('civil_status',['SOLT','CASA','DIVO','VIUD','UNLI']);
            $table->enum('gender',['MASC','FEME']);
            $table->date('birth_date');
            $table->string('age',2);
            $table->string('dependents',2);
            $table->string('child_number',2);
            $table->string('birth_place',45);


            //Campo para almacenar las llave foránea. Recordar que es una llave compuesta            
            $table->string('Compilation_idCode')->unique();
            //$table->integer('Compilation_idCaseFile');

            //definir llave foranea. Relación entre las tablas
            $table->foreign('Compilation_idCode')
                  ->references('idCode')
                  ->on('compilations')->onDelete('cascade');
            /*      
            $table->foreign('Compilation_idCaseFile')
                  ->references('idCaseFile')
                  ->on('compilations')->onDelete('cascade');
                  */
                  
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
        Schema::dropIfExists('patients');
    }
}
