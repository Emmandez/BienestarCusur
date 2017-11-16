<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLaboralInfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     * preguntar por campo designation.
     */
    public function up()
    {
        Schema::create('laboralInfo', function (Blueprint $table) {
            $table->enum('work_turn',['MATU','VESP','MAYTA','NOCT','OTRO']);
            $table->enum('type_contract',['DEFI','TEMP','POCO','OTRO']);
            $table->string('work_area', 45);
            $table->string('antiquity', 5);
            $table->string('incapacity_days_last_year', 3);

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
        Schema::dropIfExists('laboralInfo');
    }
}
