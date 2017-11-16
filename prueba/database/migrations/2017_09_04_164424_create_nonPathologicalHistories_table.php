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
            $table->increments('id');
            $table->enum('bloodType',['SEDE','A+','A-','B+','B-','O+','O-','AB+','AB-']);//SEDE=Se desconoce
            $table->mediumtext('housingServices');
            $table->string('properFeeding');

            //Campo para almacenar las llave foránea. Recordar que es una llave compuesta            
            $table->string('compilations_id')->unique();
            //$table->integer('Compilation_idCaseFile');

            //definir llave foranea. Relación entre las tablas
            $table->foreign('compilations_id')
                  ->references('id')
                  ->on('compilations')
                  ->onDelete('cascade');
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
