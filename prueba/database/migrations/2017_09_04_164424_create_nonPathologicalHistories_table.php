<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateNonPathologicalHistoriesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nonPathologicalHistories', function (Blueprint $table) {
            $table->increments('idNonPathologicalHistories');
            $table->enum('bloodType',['SEDE','A+','A-','B+','B-','O+','O-','AB+']);//SEDE=Se desconoce
            $table->mediumtext('housingServices');
            $table->enum('properFeeding',['Y','N']);

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
        Schema::dropIfExists('nonPathologicalHistories');
    }
}
